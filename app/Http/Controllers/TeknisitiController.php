<?php

namespace App\Http\Controllers;

use App\Models\Teknisiti;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TeknisitiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $teknisitis = Teknisiti::all();
        return view('content.backend.profil.teknisiti', compact('teknisitis'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('teknisi-teknologi-informasi.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:teknisiti',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'keahlian' => 'required|string|max:255',
        ]);

        $teknisiti = new Teknisiti();
        $teknisiti->nama = $request->nama;
        $teknisiti->nip = $request->nip;
        $teknisiti->jabatan = $request->jabatan;
        $teknisiti->email = $request->email;
        $teknisiti->keahlian = $request->keahlian;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $teknisiti->foto = $fileName;
        }

        $teknisiti->save();

        return redirect()->route('teknisi-teknologi-informasi.index')->with('success', 'Teknisiti created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $teknisiti = Teknisiti::findOrFail($id);
        return view('teknisi-teknologi-informasi.show', compact('teknisiti'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $teknisiti = Teknisiti::findOrFail($id);
        return view('teknisi-teknologi-informasi.edit', compact('teknisiti'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:teknisiti,nip,' . $id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'keahlian' => 'required|string|max:255',
        ]);

        $teknisiti = Teknisiti::findOrFail($id);
        $teknisiti->nama = $request->nama;
        $teknisiti->nip = $request->nip;
        $teknisiti->jabatan = $request->jabatan;
        $teknisiti->email = $request->email;
        $teknisiti->keahlian = $request->keahlian;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($teknisiti->foto && Storage::exists('public/fotos/' . $teknisiti->foto)) {
                Storage::delete('public/fotos/' . $teknisiti->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $teknisiti->foto = $fileName;
        }

        $teknisiti->save();

        return redirect()->route('teknisi-teknologi-informasi.index')->with('success', 'Teknisiti updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $teknisiti = Teknisiti::findOrFail($id);

        if ($teknisiti->foto && Storage::exists('public/fotos/' . $teknisiti->foto)) {
            Storage::delete('public/fotos/' . $teknisiti->foto);
        }

        $teknisiti->delete();

        return redirect()->route('teknisi-teknologi-informasi.index')->with('success', 'Teknisiti deleted successfully.');
    }
}
