<?php

namespace App\Http\Controllers;

use App\Models\Teknisitl;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TeknisitlController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $teknisitls = Teknisitl::all();
        return view('content.backend.profil.teknisitl', compact('teknisitls'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('teknisi-teknologi-listrik.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:teknisitl',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jabatan' => 'required|string|max:255',
        ]);

        $teknisitl = new Teknisitl();
        $teknisitl->nama = $request->nama;
        $teknisitl->nip = $request->nip;
        $teknisitl->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $teknisitl->foto = $fileName;
        }

        $teknisitl->save();

        return redirect()->route('teknisi-teknologi-listrik.index')->with('success', 'Teknisitl created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $teknisitl = Teknisitl::findOrFail($id);
        return view('teknisi-teknologi-listrik.show', compact('teknisitl'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $teknisitl = Teknisitl::findOrFail($id);
        return view('teknisi-teknologi-listrik.edit', compact('teknisitl'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:teknisitl,nip,' . $id,
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jabatan' => 'required|string|max:255',
        ]);

        $teknisitl = Teknisitl::findOrFail($id);
        $teknisitl->nama = $request->nama;
        $teknisitl->nip = $request->nip;
        $teknisitl->jabatan = $request->jabatan;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($teknisitl->foto && Storage::exists('public/fotos/' . $teknisitl->foto)) {
                Storage::delete('public/fotos/' . $teknisitl->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $teknisitl->foto = $fileName;
        }

        $teknisitl->save();

        return redirect()->route('teknisi-teknologi-listrik.index')->with('success', 'Teknisitl updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $teknisitl = Teknisitl::findOrFail($id);

        if ($teknisitl->foto && Storage::exists('public/fotos/' . $teknisitl->foto)) {
            Storage::delete('public/fotos/' . $teknisitl->foto);
        }

        $teknisitl->delete();

        return redirect()->route('teknisi-teknologi-listrik.index')->with('success', 'Teknisitl deleted successfully.');
    }
}
