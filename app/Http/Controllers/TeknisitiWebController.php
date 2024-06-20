<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Teknisiti;
use Illuminate\Http\Request;

class TeknisitiWebController extends Controller
{
    public function index()
    {
        $teknisitis = Teknisiti::all();
        return view('content.frontend.profil.teknisi_ti', compact('teknisitis'));
    }
}
