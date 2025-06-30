<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipe_bangunan' => 'required',
            'luas_bangunan' => 'required|numeric',
            'luas_tanah' => 'required|numeric',
            'lokasi' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'sertifikat' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            'fotos' => 'required|array',
            'fotos.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Proses upload sertifikat
        $sertifikatPath = null;
        if ($request->hasFile('sertifikat')) {
            $sertifikatPath = $request->file('sertifikat')->store('sertifikat', 'public');
        }

        // Proses upload foto-foto
        $fotoPaths = [];
        foreach ($request->file('fotos') as $foto) {
            $filename = time() . '_' . $foto->getClientOriginalName();
            
            // Simpan foto original
            $path = $foto->storeAs('rumah', $filename, 'public');
            
            // Buat thumbnail
            $thumbnail = Image::make($foto->getRealPath())->resize(300, 200);
            Storage::disk('public')->put('rumah/thumbs/' . $filename, $thumbnail->encode());
            
            $fotoPaths[] = $path;
        }

        // Simpan ke database
        $rumah = Rumah::create([
            'tipe_bangunan' => $request->tipe_bangunan,
            'luas_bangunan' => $request->luas_bangunan,
            'luas_tanah' => $request->luas_tanah,
            'lokasi' => $request->lokasi,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'harga' => str_replace('.', '', $request->harga),
            'sertifikat_path' => $sertifikatPath,
            'foto_paths' => json_encode($fotoPaths),
        ]);

        return redirect()->back()->with('success', 'Iklan berhasil diposting!');
    }
}
