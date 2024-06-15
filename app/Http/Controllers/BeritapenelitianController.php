<?php

namespace App\Http\Controllers;

use App\Models\Beritapenelitian;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeritapenelitianController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $beritapenelitians = Beritapenelitian::all();
        return view('content.backend.berita.beritapenelitian', compact('beritapenelitians'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('berita-penelitian.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritapenelitian = new Beritapenelitian();
        $beritapenelitian->judul = $request->judul;
        $beritapenelitian->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritapenelitian->foto = $fileName;
        }

        $beritapenelitian->save();

        return redirect()->route('berita-penelitian.index')->with('success', 'Beritapenelitian created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $beritapenelitian = Beritapenelitian::findOrFail($id);
        return view('berita-penelitian.show', compact('beritapenelitian'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $beritapenelitian = Beritapenelitian::findOrFail($id);
        return view('berita-penelitian.edit', compact('beritapenelitian'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritapenelitian = Beritapenelitian::findOrFail($id);
        $beritapenelitian->judul = $request->judul;
        $beritapenelitian->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($beritapenelitian->foto && Storage::exists('public/fotos/' . $beritapenelitian->foto)) {
                Storage::delete('public/fotos/' . $beritapenelitian->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritapenelitian->foto = $fileName;
        }

        $beritapenelitian->save();

        return redirect()->route('berita-penelitian.index')->with('success', 'Beritapenelitian updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $beritapenelitian = Beritapenelitian::findOrFail($id);

        if ($beritapenelitian->foto && Storage::exists('public/fotos/' . $beritapenelitian->foto)) {
            Storage::delete('public/fotos/' . $beritapenelitian->foto);
        }

        $beritapenelitian->delete();

        return redirect()->route('berita-penelitian.index')->with('success', 'Beritapenelitian deleted successfully.');
    }
}
