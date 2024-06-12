<?php

namespace App\Http\Controllers;

use App\Models\Ruangmanajemen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class RuangmanajemenController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $ruangmanajemen = Ruangmanajemen::all();
        return view('content.backend.fasilitas.ruangmanajemen', compact('ruangmanajemen'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('ruangmanajemen.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $ruangmanajemen = new Ruangmanajemen();
        $ruangmanajemen->nama = $request->nama;
        $ruangmanajemen->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $ruangmanajemen->foto = $fileName;
        }

        $ruangmanajemen->save();

        return redirect()->route('ruangmanajemen.index')->with('success', 'Ruangmanajemen created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $ruangmanajemen = Ruangmanajemen::findOrFail($id);
        return view('ruangmanajemen.show', compact('ruangmanajemen'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $ruangmanajemen = Ruangmanajemen::findOrFail($id);
        return view('ruangmanajemen.edit', compact('ruangmanajemen'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $ruangmanajemen = Ruangmanajemen::findOrFail($id);
        $ruangmanajemen->nama = $request->nama;
        $ruangmanajemen->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($ruangmanajemen->foto && Storage::exists('public/fotos/' . $ruangmanajemen->foto)) {
                Storage::delete('public/fotos/' . $ruangmanajemen->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $ruangmanajemen->foto = $fileName;
        }

        $ruangmanajemen->save();

        return redirect()->route('ruangmanajemen.index')->with('success', 'Ruangmanajemen updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $ruangmanajemen = Ruangmanajemen::findOrFail($id);

        if ($ruangmanajemen->foto && Storage::exists('public/fotos/' . $ruangmanajemen->foto)) {
            Storage::delete('public/fotos/' . $ruangmanajemen->foto);
        }

        $ruangmanajemen->delete();

        return redirect()->route('ruangmanajemen.index')->with('success', 'Ruangmanajemen deleted successfully.');
    }
}
