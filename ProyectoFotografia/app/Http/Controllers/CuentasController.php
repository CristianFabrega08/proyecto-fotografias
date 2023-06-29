<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\models\Perfil;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Cuenta $cuenta): RedirectResponse
    {

        if(! Gate::denies('admin-listar', $cuenta)){
            return redirect()->route('cuenta.index');
        }
        if(! Gate::denies('artista-listar', $cuenta)){
            return redirect()->route('cuenta.index');
        }
        if(! Gate::denies('visitante', $cuenta)){
            return redirect()->route('cuenta.index');
        }
        if(! Gate::denies('usuario', $cuenta)){
            return redirect()->route('cuenta.index');
        }

        $cuentas = Cuenta::all();
        $perfiles = Perfil::all();
        return view('cuenta.index',compact('cuentas','perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request){
        
        $cuenta = new Cuenta();


        $cuenta->user = $request->user;
        $cuenta->password = Hash::make($request->password);
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        $cuenta->perfil_id = 2;
        $cuenta->save();
        
        return redirect()->route('home.InicioSesion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuenta $cuenta)
    {
        $cuenta->delete();
        return redirect()->route('home.index');
    }

    public function login(Request $request){
        $credenciales = $request->only('user','password');
        if (Auth::attempt($credenciales)){
            
            $cuenta = Cuenta::where('user',$request->user)->first();  
            
            //return redirect()->route('home.index');
            return redirect()->route('home.index');
        }
        else{
            
            return back()->withErrors('Usuario o contraseña incorrecta');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.InicioSesion');
    }
}
