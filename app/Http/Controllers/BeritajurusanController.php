<?php

namespace App\Http\Controllers;

use App\Models\Beritajurusan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BeritajurusanController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $beritajurusans = Beritajurusan::all();
        return view('content.backend.berita.beritajurusan', compact('beritajurusans'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('berita-jurusan.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritajurusan = new Beritajurusan();
        $beritajurusan->judul = $request->judul;
        $beritajurusan->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritajurusan->foto = $fileName;
        }

        $beritajurusan->save();

        return redirect()->route('berita-jurusan.index')->with('success', 'Beritajurusan created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $beritajurusan = Beritajurusan::findOrFail($id);
        return view('berita-jurusan.show', compact('beritajurusan'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $beritajurusan = Beritajurusan::findOrFail($id);
        return view('berita-jurusan.edit', compact('beritajurusan'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $beritajurusan = Beritajurusan::findOrFail($id);
        $beritajurusan->judul = $request->judul;
        $beritajurusan->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($beritajurusan->foto && Storage::exists('public/fotos/' . $beritajurusan->foto)) {
                Storage::delete('public/fotos/' . $beritajurusan->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $beritajurusan->foto = $fileName;
        }

        $beritajurusan->save();

        return redirect()->route('berita-jurusan.index')->with('success', 'Beritajurusan updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $beritajurusan = Beritajurusan::findOrFail($id);

        if ($beritajurusan->foto && Storage::exists('public/fotos/' . $beritajurusan->foto)) {
            Storage::delete('public/fotos/' . $beritajurusan->foto);
        }

        $beritajurusan->delete();

        return redirect()->route('berita-jurusan.index')->with('success', 'Beritajurusan deleted successfully.');
    }
}
