<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Beritapbl;
use Illuminate\Http\Request;

class BeritapblWebController extends Controller
{
    public function index()
    {
        $beritapbls = Beritapbl::all();
        return view('content.frontend.berita.berita_pbl', compact('beritapbls'));
    }

    public function show($id)
    {
        $beritapbl = Beritapbl::findOrFail($id);
        return view('content.frontend.berita.detail_berita_pbl', compact('beritapbl'));
    }
}
