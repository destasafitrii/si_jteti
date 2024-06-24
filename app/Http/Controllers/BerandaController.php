<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kegiatanmahasiswa;
use App\Models\Beritajurusan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $beritajurusans = Beritajurusan::latest()->take(3)->get();
        $kegiatanmahasiswas = Kegiatanmahasiswa::all();
        
        return view('content.frontend.beranda', compact('kegiatanmahasiswas', 'beritajurusans'));
    }
}
