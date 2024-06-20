<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Visiti;   
use Illuminate\Http\Request;

class VisitiWebController extends Controller
{

    public function index()
    {
        $visitis = Visiti::all();
        return view('content.frontend.profil.visimisi_ti', compact('visitis'));
    }
}
