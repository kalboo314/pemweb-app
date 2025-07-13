<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        /** @var User $user */
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'name'     => 'required|string|max:30',
            'bio'      => 'nullable|string|max:250',
            'phone'    => 'nullable|string|max:20',
            'email'    => 'required|email',
            'instagram'=> 'nullable|url',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user->update($request->only(['name', 'bio', 'phone', 'email', 'instagram']));

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $generatedName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $generatedName);

            $user->profile_photo = $generatedName;
            $user->profile_photo_original = $file->getClientOriginalName();
            $user->save(); // Tetap dipanggil karena ada perubahan manual
        }

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile-seller', compact('user'));
    }


}
