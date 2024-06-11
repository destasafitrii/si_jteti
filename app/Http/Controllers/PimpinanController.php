<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pimpinan;
use Illuminate\Support\Facades\Storage;

class PimpinanController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $pimpinans = Pimpinan::all();
        return view('content.backend.pimpinan.index', compact('pimpinans'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('pimpinan.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:pimpinan',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nidn' => 'required|string|max:255|unique:pimpinan',
            'jabatan' => 'required|string|max:255',
        ]);

        $pimpinan = new Pimpinan();
        $pimpinan->nama = $request->nama;
        $pimpinan->nip = $request->nip;
        $pimpinan->nidn = $request->nidn;
        $pimpinan->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $pimpinan->foto = $fileName;
        }

        $pimpinan->save();

        return redirect()->route('pimpinan.index')->with('success', 'Pimpinan created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $pimpinan = Pimpinan::findOrFail($id);
        return view('pimpinan.show', compact('pimpinan'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $pimpinan = Pimpinan::findOrFail($id);
        return view('pimpinan.edit', compact('pimpinan'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:pimpinan,nip,' . $id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nidn' => 'required|string|max:255|unique:pimpinan,nidn,' . $id,
            'jabatan' => 'required|string|max:255',
        ]);

        $pimpinan = Pimpinan::findOrFail($id);
        $pimpinan->nama = $request->nama;
        $pimpinan->nip = $request->nip;
        $pimpinan->nidn = $request->nidn;
        $pimpinan->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($pimpinan->foto && Storage::exists('public/fotos/' . $pimpinan->foto)) {
                Storage::delete('public/fotos/' . $pimpinan->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $pimpinan->foto = $fileName;
        }

        $pimpinan->save();

        return redirect()->route('pimpinan.index')->with('success', 'Pimpinan updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $pimpinan = Pimpinan::findOrFail($id);

        if ($pimpinan->foto && Storage::exists('public/fotos/' . $pimpinan->foto)) {
            Storage::delete('public/fotos/' . $pimpinan->foto);
        }

        $pimpinan->delete();

        return redirect()->route('pimpinan.index')->with('success', 'Pimpinan deleted successfully.');
    }
}
