<?php

namespace App\Http\Controllers;

use App\Models\Dosentl;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DosentlController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $dosentls = Dosentl::all();
        return view('content.backend.profil.dosentl', compact('dosentls'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('dosen-teknologi-listrik.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosentl',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keahlian' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $dosentl = new Dosentl();
        $dosentl->nama = $request->nama;
        $dosentl->nip = $request->nip;
        $dosentl->keahlian = $request->keahlian;
        $dosentl->jabatan = $request->jabatan;
        $dosentl->email = $request->email;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $dosentl->foto = $fileName;
        }

        $dosentl->save();

        return redirect()->route('dosen-teknologi-listrik.index')->with('success', 'Dosentl created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $dosentl = Dosentl::findOrFail($id);
        return view('dosen-teknologi-listrik.show', compact('dosentl'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $dosentl = Dosentl::findOrFail($id);
        return view('dosen-teknologi-listrik.edit', compact('dosentl'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosentl,nip,' . $id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keahlian' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $dosentl = Dosentl::findOrFail($id);
        $dosentl->nama = $request->nama;
        $dosentl->nip = $request->nip;
        $dosentl->keahlian = $request->keahlian;
        $dosentl->jabatan = $request->jabatan;
        $dosentl->email = $request->email;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($dosentl->foto && Storage::exists('public/fotos/' . $dosentl->foto)) {
                Storage::delete('public/fotos/' . $dosentl->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $dosentl->foto = $fileName;
        }

        $dosentl->save();

        return redirect()->route('dosen-teknologi-listrik.index')->with('success', 'Dosentl updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $dosentl = Dosentl::findOrFail($id);

        if ($dosentl->foto && Storage::exists('public/fotos/' . $dosentl->foto)) {
            Storage::delete('public/fotos/' . $dosentl->foto);
        }

        $dosentl->delete();

        return redirect()->route('dosen-teknologi-listrik.index')->with('success', 'Dosentl deleted successfully.');
    }
}
