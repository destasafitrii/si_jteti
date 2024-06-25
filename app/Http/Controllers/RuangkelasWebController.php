<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\RuangKelas;
use Illuminate\Http\Request;

class RuangkelasWebController extends Controller
{
    public function index()
    {
        $ruangkelas = RuangKelas::all();
        return view('content.frontend.fasilitas.ruang_kelas', compact('ruangkelas'));
    }

    public function show($id)
    {
        $ruangkelas = RuangKelas::findOrFail($id);
        return view('content.frontend.fasilitas.detail_ruang_kelas', compact('ruangkelas'));
    }
}
