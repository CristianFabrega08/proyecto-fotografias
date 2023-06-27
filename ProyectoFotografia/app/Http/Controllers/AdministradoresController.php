<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cuenta;

class AdministradoresController extends Controller
{

    public function index(){
        return view('administrador.index');
    }

    public function ListaPerfiles(){

        $cuentas = Cuenta::all();
        return view('administrador.ListaPerfiles', compact('cuentas'));

    }
}
