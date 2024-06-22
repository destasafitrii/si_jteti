<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Kegiatanmahasiswa;
use Illuminate\Http\Request;

class KegiatanmahasiswaWebController extends Controller
{
    public function index()
    {
        $kegiatanmahasiswas = Kegiatanmahasiswa::all();
        return view('content.frontend.beranda', compact('kegiatanmahasiswas'));
    }
}
