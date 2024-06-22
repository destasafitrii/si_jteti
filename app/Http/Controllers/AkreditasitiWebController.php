<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Akreditasiti;
use Illuminate\Http\Request;

class AkreditasitiWebController extends Controller
{
    public function index()
    {
        $akreditasitis = Akreditasiti::all();
        return view('content.frontend.akreditasi.akreditasi_ti', compact('akreditasitis'));
    }
}
