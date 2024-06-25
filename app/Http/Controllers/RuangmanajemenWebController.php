<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\RuangManajemen;
use Illuminate\Http\Request;

class RuangmanajemenWebController extends Controller
{
    public function index()
    {
        $ruangmanajemens = RuangManajemen::all();
        return view('content.frontend.fasilitas.ruang_manajemen', compact('ruangmanajemens'));
    }

    public function show($id)
    {
        $ruangmanajemen = RuangManajemen::findOrFail($id);
        return view('content.frontend.fasilitas.detail_ruang_manajemen', compact('ruangmanajemen'));
    }
}
