<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\Survey;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::all();
        $properties = Property::all();
        $surveys = Survey::with('property')->get();

        return view('admin.dashboard', compact('users', 'properties', 'surveys'));
    }

    public function createUser()
    {
        return view('admin.create-user');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'nullable|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role ?? 'user',
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'User berhasil ditambahkan');
    }

    public function updateUserRole($id, Request $request)
    {
        $request->validate(['role' => 'required|in:user,admin']);
        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return back()->with('success', 'Role diperbarui');
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return back()->with('success', 'User dihapus');
    }

    public function createProperty()
    {
        return view('admin.create-property');
    }


    public function storeProperty(Request $request)
    {
        // contoh sederhana, harus ditambah validasi dan upload jika dibutuhkan
        Property::create($request->all());
        return back()->with('success', 'Properti ditambahkan');
    }

    public function deleteProperty($id)
    {
        Property::destroy($id);
        return back()->with('success', 'Properti dihapus');
    }

    public function deleteSurvey($id)
    {
        Survey::destroy($id);
        return back()->with('success', 'Survey dihapus');
    }
}
