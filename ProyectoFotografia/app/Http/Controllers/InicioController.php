<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function login(){
        return view('home.InicioSesion');
    }
}
