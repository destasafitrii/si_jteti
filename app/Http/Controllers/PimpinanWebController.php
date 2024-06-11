<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pimpinan;
use Illuminate\Http\Request;

class PimpinanWebController extends Controller
{
    public function index()
    {
        $pimpinans = Pimpinan::all();
        return view('content.frontend.profil.pimpinan', compact('pimpinans'));
    }
}
