<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    public function index(){
        return view('artista.index');
    }

    
}
