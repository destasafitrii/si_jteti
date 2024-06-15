<?php

namespace App\Http\Controllers;

use App\Models\Visitl;
use Illuminate\Http\Request;

class VisitlController extends Controller
{
    // Menampilkan daftar data.
    public function index()
    {
        $visitls = Visitl::all();
        return view('content.backend.profil.visitl', compact('visitls'));
    }

    // Menampilkan form untuk membuat data baru.
    public function create()
    {
        return view('visi-misi-tl.create');
    }

    // Menyimpan data baru ke dalam database.
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visitl = new Visitl();
        $visitl->visi = $request->visi;
        $visitl->misi = $request->misi;

        $visitl->save();

        return redirect()->route('visi-misi-tl.index')->with('success', 'Visitl created successfully.');
    }

    // Menampilkan data tertentu.
    public function show($id)
    {
        $visitl = Visitl::findOrFail($id);
        return view('visi-misi-tl.show', compact('visitl'));
    }

    // Menampilkan form untuk mengedit data.
    public function edit($id)
    {
        $visitl = Visitl::findOrFail($id);
        return view('visi-misi-tl.edit', compact('visitl'));
    }

    // Menyimpan perubahan pada data ke dalam database.
    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);

        $visitl = Visitl::findOrFail($id);
        $visitl->visi = $request->visi;
        $visitl->misi = $request->misi;

        $visitl->save();

        return redirect()->route('visi-misi-tl.index')->with('success', 'Visitl updated successfully.');
    }

    // Menghapus data tertentu dari database.
    public function destroy($id)
    {
        $visitl = Visitl::findOrFail($id);
        $visitl->delete();

        return redirect()->route('visi-misi-tl.index')->with('success', 'Visitl deleted successfully.');
    }
}