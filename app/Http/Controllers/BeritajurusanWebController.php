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
}
