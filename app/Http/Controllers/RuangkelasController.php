<?php

namespace App\Http\Controllers;

use App\Models\Ruangkelas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RuangkelasController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $ruangkelas = Ruangkelas::all();
        return view('content.backend.fasilitas.ruangkelas', compact('ruangkelas'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('ruangkelas.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $ruangkelas = new Ruangkelas();
        $ruangkelas->nama = $request->nama;
        $ruangkelas->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $ruangkelas->foto = $fileName;
        }

        $ruangkelas->save();

        return redirect()->route('ruangkelas.index')->with('success', 'Ruangkelas created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $ruangkelas = Ruangkelas::findOrFail($id);
        return view('ruangkelas.show', compact('ruangkelas'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $ruangkelas = Ruangkelas::findOrFail($id);
        return view('ruangkelas.edit', compact('ruangkelas'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $ruangkelas = Ruangkelas::findOrFail($id);
        $ruangkelas->nama = $request->nama;
        $ruangkelas->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($ruangkelas->foto && Storage::exists('public/fotos/' . $ruangkelas->foto)) {
                Storage::delete('public/fotos/' . $ruangkelas->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $ruangkelas->foto = $fileName;
        }

        $ruangkelas->save();

        return redirect()->route('ruangkelas.index')->with('success', 'Ruangkelas updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $ruangkelas = Ruangkelas::findOrFail($id);

        if ($ruangkelas->foto && Storage::exists('public/fotos/' . $ruangkelas->foto)) {
            Storage::delete('public/fotos/' . $ruangkelas->foto);
        }

        $ruangkelas->delete();

        return redirect()->route('ruangkelas.index')->with('success', 'Ruangkelas deleted successfully.');
    }
}
