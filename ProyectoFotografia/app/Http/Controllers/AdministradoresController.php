<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuenta;
use App\models\Perfil;
class AdministradoresController extends Controller
{

    public function index(){
        $perfiles = Perfil::all();
        return view('administrador.index',compact('perfiles'));
    }

    public function ListaPerfiles(){

        $cuentas = Cuenta::all();
        return view('administrador.ListaPerfiles', compact('cuentas'));

    }
}
