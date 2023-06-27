<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use App\Models\Perfil;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{

    public function index(){
        $cuentas = Cuenta::all();
        $perfiles = Perfil::all();
        return view('artista.index',compact('cuentas','perfiles'));
    }

    public function subirFoto(){
        return view('artista.subirFoto');
    }

    public function store(Request $request){
        
    }
}
