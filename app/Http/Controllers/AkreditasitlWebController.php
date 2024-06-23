<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Akreditasitl;
use Illuminate\Http\Request;

class AkreditasitlWebController extends Controller
{
    public function index()
    {
        $akreditasitls = Akreditasitl::all();
        return view('content.frontend.akreditasi.akreditasi_te', compact('akreditasitls'));
    }
}
