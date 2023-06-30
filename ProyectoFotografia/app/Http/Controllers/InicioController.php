<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;

class InicioController extends Controller
{
    public function show(Imagen $imagen){

        $imagen = Imagen::all();
        return view('home.show',compact('imagen'));
        if(! Gate::denies('admin-listar', $cuenta)){
            return redirect()->route('cuenta.index');
        }
    }

    public function login(){
        return view('home.InicioSesion');
    }
}
