<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request){
        $credenciales = $request->only('user','password');
        if (Auth::attempt($credenciales)){
            
            $cuentas = Cuenta::where('user',$request->user)->first();  
            
            return redirect()->route('home.index');
        }
        else{
            
            return back()->withErrors('Usuario o contraseña incorrecta');
        }

    }
}
