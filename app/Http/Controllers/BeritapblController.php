<?php

namespace App\Http\Controllers;

use App\Models\Beritapbl;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeritapblController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $beritapbls = Beritapbl::all();
        return view('content.backend.berita.beritapbl', compact('beritapbls'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('berita-pbl.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritapbl = new Beritapbl();
        $beritapbl->judul = $request->judul;
        $beritapbl->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritapbl->foto = $fileName;
        }

        $beritapbl->save();

        return redirect()->route('berita-pbl.index')->with('success', 'Beritapbl created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $beritapbl = Beritapbl::findOrFail($id);
        return view('berita-pbl.show', compact('beritapbl'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $beritapbl = Beritapbl::findOrFail($id);
        return view('berita-pbl.edit', compact('beritapbl'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritapbl = Beritapbl::findOrFail($id);
        $beritapbl->judul = $request->judul;
        $beritapbl->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($beritapbl->foto && Storage::exists('public/fotos/' . $beritapbl->foto)) {
                Storage::delete('public/fotos/' . $beritapbl->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritapbl->foto = $fileName;
        }

        $beritapbl->save();

        return redirect()->route('berita-pbl.index')->with('success', 'Beritapbl updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $beritapbl = Beritapbl::findOrFail($id);

        if ($beritapbl->foto && Storage::exists('public/fotos/' . $beritapbl->foto)) {
            Storage::delete('public/fotos/' . $beritapbl->foto);
        }

        $beritapbl->delete();

        return redirect()->route('berita-pbl.index')->with('success', 'Beritapbl deleted successfully.');
    }
}
