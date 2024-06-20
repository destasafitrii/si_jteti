<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Dosenti;
use Illuminate\Http\Request;

class DosentiWebController extends Controller
{
    public function index()
    {
        $dosentis = Dosenti::all();
        return view('content.frontend.profil.dosen_ti', compact('dosentis'));
    }
}
