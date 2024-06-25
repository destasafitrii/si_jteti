<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Beritajurusan;
use Illuminate\Http\Request;

class BeritajurusanWebController extends Controller
{
    public function index()
    {
        $beritajurusans = Beritajurusan::all();
        return view('content.frontend.berita.berita_jurusan', compact('beritajurusans'));
    }

    public function show($id)
    {
        $beritajurusan = Beritajurusan::findOrFail($id);
        return view('content.frontend.berita.detail_berita_jurusan', compact('beritajurusan'));
    }
}
