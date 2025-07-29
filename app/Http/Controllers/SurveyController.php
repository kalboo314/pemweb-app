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
            'phone' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'catatan' => 'nullable|string',
            'property_id' => 'required|exists:properties,id',
        ]);

        $tanggal = $validated['tanggal'];
        
        $tanggalSudahAda = Survey::where('property_id', $request->property_id)
            ->where('tanggal', $request->tanggal)
            ->exists();

        if ($tanggalSudahAda) {
            return back()->withErrors(['tanggal' => 'Tanggal tersebut sudah dipesan untuk survey.'])->withInput();
        }

        Survey::create($validated);

         return redirect()
        ->route('detail', $request->property_id)
        ->with('survey_success', "Survey berhasil dijadwalkan pada tanggal " . date('d M Y', strtotime($tanggal)) . "!");
    }
}
