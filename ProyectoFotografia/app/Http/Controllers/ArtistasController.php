<?php

namespace App\Http\Controllers;
use App\Models\Cuenta;
use App\Models\Perfil;
use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        

        
        $imagenes = new Imagen();

        $imagenes->titulo = $request->titulo;
        $imagenes->archivo = $request->archivo->store('public/images');
        $imagenes->baneada = false;
        $imagenes->motivo_ban = null;
        $imagenes->cuenta_user = Auth::user()->user;
        $imagenes->save();
        return view('artista.subirFoto');
    }
}
