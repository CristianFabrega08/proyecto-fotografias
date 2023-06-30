<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use Illuminate\Support\Facades\DB;
class InicioController extends Controller
{
    public function show(Request $request){

        
        

        

        $usuario=$request->artista;
        $artistas = DB::table('cuentas')->where('perfil_id',2)->get();
        if($artistas->contains('user', $usuario)){
            $imagenes = DB::table('imagenes')->where('cuenta_user',$usuario)->get();;
        } else {
            $imagenes = Imagen::ALL();
        }

        return view('home.show',compact(['imagenes','artistas']));
    }

    public function login(){
        return view('home.InicioSesion');
    }
}
