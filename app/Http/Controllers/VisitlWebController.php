<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Visitl;
use Illuminate\Http\Request;

class VisitlWebController extends Controller
{
    public function index()
    {
        $visitls = Visitl::all();
        return view('content.frontend.profil.visimisi_te', compact('visitls'));
    }
}
