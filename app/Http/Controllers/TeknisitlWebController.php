<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Teknisitl;
use Illuminate\Http\Request;

class TeknisitlWebController extends Controller
{
    public function index()
    {
        $teknisitls = Teknisitl::all();
        return view('content.frontend.profil.teknisi_te', compact('teknisitls'));
    }
}
