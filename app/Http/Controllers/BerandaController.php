<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kegiatanmahasiswa;
use App\Models\Beritajurusan;
use App\Models\Beritapenelitian;
use App\Models\Beritapengabdian;
use App\Models\Beritapbl;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $kegiatanmahasiswas = Kegiatanmahasiswa::all();
        $beritajurusans = Beritajurusan::latest()->take(3)->get();
        $beritapenelitians = Beritapenelitian::latest()->take(3)->get();
        $beritapengabdians = Beritapengabdian::latest()->take(3)->get();
        $beritapbls = Beritapbl::latest()->take(3)->get();
        
        return view('content.frontend.beranda', compact('kegiatanmahasiswas', 'beritajurusans', 'beritapenelitians', 'beritapengabdians', 'beritapbls'));
    }
}
