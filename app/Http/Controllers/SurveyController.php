<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Property;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create($id)
    {
        $property = Property::findOrFail($id);
        return view('house-survey', compact('property'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'property_id' => 'required|exists:properties,id',
        ]);

        Survey::create($validated);

        return redirect()
            ->route('detail', $request->property_id)
            ->with('success_message', 'Permintaan survey berhasil dikirim!');
    }

}
