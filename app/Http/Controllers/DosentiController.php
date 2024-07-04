<?php

namespace App\Http\Controllers;

use App\Models\Dosenti;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DosentiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $dosentis = Dosenti::all();
        return view('content.backend.profil.dosenti', compact('dosentis'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('dosen-teknologi-informasi.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosenti',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keahlian' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $dosenti = new Dosenti();
        $dosenti->nama = $request->nama;
        $dosenti->nip = $request->nip;
        $dosenti->keahlian = $request->keahlian;
        $dosenti->jabatan = $request->jabatan;
        $dosenti->email = $request->email;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $dosenti->foto = $fileName;
        }

        $dosenti->save();

        return redirect()->route('dosen-teknologi-informasi.index')->with('success', 'Dosenti created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $dosenti = Dosenti::findOrFail($id);
        return view('dosen-teknologi-informasi.show', compact('dosenti'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $dosenti = Dosenti::findOrFail($id);
        return view('dosen-teknologi-informasi.edit', compact('dosenti'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosenti,nip,' . $id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keahlian' => 'required|string|max:255|',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $dosenti = Dosenti::findOrFail($id);
        $dosenti->nama = $request->nama;
        $dosenti->nip = $request->nip;
        $dosenti->keahlian = $request->keahlian;
        $dosenti->jabatan = $request->jabatan;
        $dosenti->email = $request->email;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($dosenti->foto && Storage::exists('public/fotos/' . $dosenti->foto)) {
                Storage::delete('public/fotos/' . $dosenti->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $dosenti->foto = $fileName;
        }

        $dosenti->save();

        return redirect()->route('dosen-teknologi-informasi.index')->with('success', 'Dosenti updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $dosenti = Dosenti::findOrFail($id);

        if ($dosenti->foto && Storage::exists('public/fotos/' . $dosenti->foto)) {
            Storage::delete('public/fotos/' . $dosenti->foto);
        }

        $dosenti->delete();

        return redirect()->route('dosen-teknologi-informasi.index')->with('success', 'Dosenti deleted successfully.');
    }
}
