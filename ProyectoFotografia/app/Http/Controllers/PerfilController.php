<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Perfil;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class PerfilController extends Controller
{
    public function index(){
        $perfiles = Perfil::all();
        return view('artista.index',compact('perfiles'));
    }

    public function store(Request $request){
        $perfil = new Perfil();
        $perfil->nombre= $request->nombre;
        $perfil->save();
    }
}
