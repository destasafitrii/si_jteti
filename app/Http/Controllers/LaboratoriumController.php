<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $laboratoriums = Laboratorium::all();
        return view('content.backend.fasilitas.laboratorium', compact('laboratoriums'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('laboratorium.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $laboratorium = new Laboratorium();
        $laboratorium->nama = $request->nama;
        $laboratorium->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $laboratorium->foto = $fileName;
        }

        $laboratorium->save();

        return redirect()->route('laboratorium.index')->with('success', 'Laboratorium created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        return view('laboratorium.show', compact('laboratorium'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        return view('laboratorium.edit', compact('laboratorium'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $laboratorium = Laboratorium::findOrFail($id);
        $laboratorium->nama = $request->nama;
        $laboratorium->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($laboratorium->foto && Storage::exists('public/fotos/' . $laboratorium->foto)) {
                Storage::delete('public/fotos/' . $laboratorium->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $laboratorium->foto = $fileName;
        }

        $laboratorium->save();

        return redirect()->route('laboratorium.index')->with('success', 'Laboratorium updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);

        if ($laboratorium->foto && Storage::exists('public/fotos/' . $laboratorium->foto)) {
            Storage::delete('public/fotos/' . $laboratorium->foto);
        }

        $laboratorium->delete();

        return redirect()->route('laboratorium.index')->with('success', 'Laboratorium deleted successfully.');
    }
}
