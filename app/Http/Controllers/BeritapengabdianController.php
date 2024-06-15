<?php

namespace App\Http\Controllers;

use App\Models\Beritapengabdian;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeritapengabdianController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $beritapengabdians = Beritapengabdian::all();
        return view('content.backend.berita.beritapengabdian', compact('beritapengabdians'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('berita-pengabdian.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritapengabdian = new Beritapengabdian();
        $beritapengabdian->judul = $request->judul;
        $beritapengabdian->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritapengabdian->foto = $fileName;
        }

        $beritapengabdian->save();

        return redirect()->route('berita-pengabdian.index')->with('success', 'Beritapengabdian created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $beritapengabdian = Beritapengabdian::findOrFail($id);
        return view('berita-pengabdian.show', compact('beritapengabdian'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $beritapengabdian = Beritapengabdian::findOrFail($id);
        return view('berita-pengabdian.edit', compact('beritapengabdian'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritapengabdian = Beritapengabdian::findOrFail($id);
        $beritapengabdian->judul = $request->judul;
        $beritapengabdian->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($beritapengabdian->foto && Storage::exists('public/fotos/' . $beritapengabdian->foto)) {
                Storage::delete('public/fotos/' . $beritapengabdian->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritapengabdian->foto = $fileName;
        }

        $beritapengabdian->save();

        return redirect()->route('berita-pengabdian.index')->with('success', 'Beritapengabdian updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $beritapengabdian = Beritapengabdian::findOrFail($id);

        if ($beritapengabdian->foto && Storage::exists('public/fotos/' . $beritapengabdian->foto)) {
            Storage::delete('public/fotos/' . $beritapengabdian->foto);
        }

        $beritapengabdian->delete();

        return redirect()->route('berita-pengabdian.index')->with('success', 'Beritapengabdian deleted successfully.');
    }
}
