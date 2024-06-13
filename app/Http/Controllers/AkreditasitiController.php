<?php

namespace App\Http\Controllers;

use App\Models\Akreditasiti;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AkreditasitiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $akreditasitis = Akreditasiti::all();
        return view('content.backend.akademik.akreditasiti', compact('akreditasitis'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('akreditasi-teknologi-informasi.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_akreditasi' => 'required|date|before_or_equal:masa_berlaku',
            'masa_berlaku' => 'required|date|after_or_equal:tanggal_akreditasi',
        ]);

        $akreditasiti = new Akreditasiti();
        $akreditasiti->tanggal_akreditasi = $request->tanggal_akreditasi;
        $akreditasiti->masa_berlaku = $request->masa_berlaku;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $akreditasiti->foto = $fileName;
        }

        $akreditasiti->save();

        return redirect()->route('akreditasi-teknologi-informasi.index')->with('success', 'Akreditasiti created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $akreditasiti = Akreditasiti::findOrFail($id);
        return view('akreditasi-teknologi-informasi.show', compact('akreditasiti'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $akreditasiti = Akreditasiti::findOrFail($id);
        return view('akreditasi-teknologi-informasi.edit', compact('akreditasiti'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_akreditasi' => 'required|date|before_or_equal:masa_berlaku',
            'masa_berlaku' => 'required|date|after_or_equal:tanggal_akreditasi',
        ]);

        $akreditasiti = Akreditasiti::findOrFail($id);
        $akreditasiti->tanggal_akreditasi = $request->tanggal_akreditasi;
        $akreditasiti->masa_berlaku = $request->masa_berlaku;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($akreditasiti->foto && Storage::exists('public/fotos/' . $akreditasiti->foto)) {
                Storage::delete('public/fotos/' . $akreditasiti->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $akreditasiti->foto = $fileName;
        }

        $akreditasiti->save();

        return redirect()->route('akreditasi-teknologi-informasi.index')->with('success', 'Akreditasiti updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $akreditasiti = Akreditasiti::findOrFail($id);

        if ($akreditasiti->foto && Storage::exists('public/fotos/' . $akreditasiti->foto)) {
            Storage::delete('public/fotos/' . $akreditasiti->foto);
        }

        $akreditasiti->delete();

        return redirect()->route('akreditasi-teknologi-informasi.index')->with('success', 'Akreditasiti deleted successfully.');
    }
}
