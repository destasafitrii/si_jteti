<?php

namespace App\Http\Controllers;

use App\Models\Akreditasitl;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AkreditasitlController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $akreditasitls = Akreditasitl::all();
        return view('content.backend.akademik.akreditasitl', compact('akreditasitls'));
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

        $akreditasitl = new Akreditasitl();
        $akreditasitl->tanggal_akreditasi = $request->tanggal_akreditasi;
        $akreditasitl->masa_berlaku = $request->masa_berlaku;

        if ($request->hasFile('foto')) {
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $akreditasitl->foto = $fileName;
        }

        $akreditasitl->save();

        return redirect()->route('akreditasi-teknologi-informasi.index')->with('success', 'Akreditasitl created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $akreditasitl = Akreditasitl::findOrFail($id);
        return view('akreditasi-teknologi-informasi.show', compact('akreditasitl'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $akreditasitl = Akreditasitl::findOrFail($id);
        return view('akreditasi-teknologi-informasi.edit', compact('akreditasitl'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal_akreditasi' => 'required|date|before_or_equal:masa_berlaku',
            'masa_berlaku' => 'required|date|after_or_equal:tanggal_akreditasi',
        ]);

        $akreditasitl = Akreditasitl::findOrFail($id);
        $akreditasitl->tanggal_akreditasi = $request->tanggal_akreditasi;
        $akreditasitl->masa_berlaku = $request->masa_berlaku;

        if ($request->hasFile('foto')) {
            // Delete the old foto
            if ($akreditasitl->foto && Storage::exists('public/fotos/' . $akreditasitl->foto)) {
                Storage::delete('public/fotos/' . $akreditasitl->foto);
            }

            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/fotos', $fileName);
            $akreditasitl->foto = $fileName;
        }

        $akreditasitl->save();

        return redirect()->route('akreditasi-teknologi-informasi.index')->with('success', 'Akreditasitl updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $akreditasitl = Akreditasitl::findOrFail($id);

        if ($akreditasitl->foto && Storage::exists('public/fotos/' . $akreditasitl->foto)) {
            Storage::delete('public/fotos/' . $akreditasitl->foto);
        }

        $akreditasitl->delete();

        return redirect()->route('akreditasi-teknologi-informasi.index')->with('success', 'Akreditasitl deleted successfully.');
    }
}
