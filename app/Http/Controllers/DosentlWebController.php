<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Dosentl;
use Illuminate\Http\Request;

class DosentlWebController extends Controller
{
    public function index()
    {
        $dosentls = Dosentl::all();
        return view('content.frontend.profil.dosen_te', compact('dosentls'));
    }
}
