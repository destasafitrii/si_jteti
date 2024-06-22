<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Beritapenelitian; 
use Illuminate\Http\Request;

class BeritapenelitianWebController extends Controller
{
    public function index()
    {
        $beritapenelitians = Beritapenelitian::all();
        return view('content.frontend.berita.berita_penelitian', compact('beritapenelitians'));
    }
}
