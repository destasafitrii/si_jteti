<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Beritapengabdian;
use Illuminate\Http\Request;

class BeritapengabdianWebController extends Controller
{
    public function index()
    {
        $beritapengabdians = Beritapengabdian::all();
        return view('content.frontend.berita.berita_pengabdian', compact('beritapengabdians'));
    }
}
