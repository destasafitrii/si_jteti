<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Beritapengabdian;
use Illuminate\Http\Request;

class BeritapengabdianWebController extends Controller
{
    public function index()
    {
        $beritapengabdians = Beritapengabdian::paginate(9);
        return view('content.frontend.berita.berita_pengabdian', compact('beritapengabdians'));
    }

    public function show($id)
    {
        $beritapengabdian = Beritapengabdian::findOrFail($id);
        return view('content.frontend.berita.detail_berita_pengabdian', compact('beritapengabdian'));
    }
}
