<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiti; // Sesuaikan dengan model yang telah Anda buat
use Illuminate\Support\Facades\Storage;

class VisitiController extends Controller
{
    // Menampilkan daftar data.
    public function index()
    {
        $visitis = Visiti::all();
        return view('content.backend.profil.visiti', compact('visitis'));
    }

    // Menampilkan form untuk membuat data baru.
    public function create()
    {
        return view('visi-misi-ti.create');
    }

    // Menyimpan data baru ke dalam database.
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visiti = new Visiti();
        $visiti->visi = $request->visi;
        $visiti->misi = $request->misi;

        $visiti->save();

        return redirect()->route('visi-misi-ti.index')->with('success', 'Visiti created successfully.');
    }

    // Menampilkan data tertentu.
    public function show($id)
    {
        $visiti = Visiti::findOrFail($id);
        return view('visi-misi-ti.show', compact('visiti'));
    }

    // Menampilkan form untuk mengedit data.
    public function edit($id)
    {
        $visiti = Visiti::findOrFail($id);
        return view('visi-misi-ti.edit', compact('visiti'));
    }

    // Menyimpan perubahan pada data ke dalam database.
    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visiti = Visiti::findOrFail($id);
        $visiti->visi = $request->visi;
        $visiti->misi = $request->misi;

        $visiti->save();

        return redirect()->route('visi-misi-ti.index')->with('success', 'Visiti updated successfully.');
    }

    // Menghapus data tertentu dari database.
    public function destroy($id)
    {
        $visiti = Visiti::findOrFail($id);
        $visiti->delete();

        return redirect()->route('visi-misi-ti.index')->with('success', 'Visiti deleted successfully.');
    }
}
