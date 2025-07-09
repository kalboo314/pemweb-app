<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyPhoto;
use Exception;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'tipe_bangunan' => 'required|string',
                'luas_bangunan' => 'required|numeric',
                'luas_tanah' => 'required|numeric',
                'lokasi' => 'required|string',
                'judul' => 'required|string',
                'deskripsi' => 'nullable|string',
                'harga' => 'required|string',
                'sertifikat' => 'required|file|mimes:pdf,docx|max:2048',
                'foto' => 'required|array|max:5',
                'foto.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // simpan file sertifikat
            $sertifikat = $request->file('sertifikat');
            $sertifikatGenerated = $sertifikat->hashName();
            $sertifikat->storeAs('uploads', $sertifikatGenerated);



            // hilangkan titik dari harga (contoh: 1.000.000 => 1000000)
            $harga = str_replace('.', '', $request->input('harga'));

            $property = Property::create([
                'tipe_bangunan' => $request->tipe_bangunan,
                'luas_bangunan' => $request->luas_bangunan,
                'luas_tanah' => $request->luas_tanah,
                'lokasi' => $request->lokasi,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'harga' => $harga,
                'sertifikat_original_name' => $sertifikat->getClientOriginalName(),
                'sertifikat_generate_name' => $sertifikatGenerated,
            ]);

            foreach ($request->file('foto') as $foto) {
                $fotoGenerated = $foto->hashName();
                $foto->storeAs('uploads', $fotoGenerated);

                PropertyPhoto::create([
                    'property_id' => $property->id,
                    'original_name' => $foto->getClientOriginalName(),
                    'generated_name' => $fotoGenerated,
                ]);
            }

            return redirect('/profile')->with('success', 'Iklan berhasil dipasang!');
        } catch (Exception $e) {
            dd('Error:', $e->getMessage());
        }
        
    }

    public function index()
    {
        $properties = Property::latest()->paginate(9);
        return view('listing', compact('properties'));
    }

}

