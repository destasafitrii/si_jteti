<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Laboratorium;
use Illuminate\Http\Request;

class LaboratoriumWebController extends Controller
{
    public function index()
    {
        $laboratorium = Laboratorium::all();
        return view('content.frontend.fasilitas.laboratorium', compact('laboratorium'));
    }

    public function show($id)
    {
        $laboratorium = Laboratorium::findOrFail($id);
        return view('content.frontend.fasilitas.detail_laboratorium', compact('laboratorium'));
    }
}
