<?php

namespace App\Http\Controllers;

use App\Models\Kegiatanmahasiswa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class KegiatanmahasiswaController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $kegiatanmahasiswas = Kegiatanmahasiswa::all();
        return view('content.backend.kegiatanmahasiswa', compact('kegiatanmahasiswas'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('kegiatan-mahasiswa.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kegiatanmahasiswa = new Kegiatanmahasiswa();
        $kegiatanmahasiswa->judul = $request->judul;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $kegiatanmahasiswa->foto = $fileName;
        }

        $kegiatanmahasiswa->save();

        return redirect()->route('kegiatan-mahasiswa.index')->with('success', 'Kegiatanmahasiswa created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $kegiatanmahasiswa = Kegiatanmahasiswa::findOrFail($id);
        return view('kegiatan-mahasiswa.show', compact('kegiatanmahasiswa'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $kegiatanmahasiswa = Kegiatanmahasiswa::findOrFail($id);
        return view('kegiatan-mahasiswa.edit', compact('kegiatanmahasiswa'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $kegiatanmahasiswa = Kegiatanmahasiswa::findOrFail($id);
        $kegiatanmahasiswa->judul = $request->judul;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($kegiatanmahasiswa->foto && Storage::exists('public/fotos/' . $kegiatanmahasiswa->foto)) {
                Storage::delete('public/fotos/' . $kegiatanmahasiswa->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $kegiatanmahasiswa->foto = $fileName;
        }

        $kegiatanmahasiswa->save();

        return redirect()->route('kegiatan-mahasiswa.index')->with('success', 'Kegiatanmahasiswa updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $kegiatanmahasiswa = Kegiatanmahasiswa::findOrFail($id);

        if ($kegiatanmahasiswa->foto && Storage::exists('public/fotos/' . $kegiatanmahasiswa->foto)) {
            Storage::delete('public/fotos/' . $kegiatanmahasiswa->foto);
        }

        $kegiatanmahasiswa->delete();

        return redirect()->route('kegiatan-mahasiswa.index')->with('success', 'Kegiatanmahasiswa deleted successfully.');
    }
}
