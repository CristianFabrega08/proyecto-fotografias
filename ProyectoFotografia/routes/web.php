<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\AdministradoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//VISTAS
Route::get('/',[InicioController::class,'index'])->name('home.index');
Route::get('/index',[ArtistasController::class,'index'])->name('artista.index');
Route::get('/',[AdministradoresController::class,'index'])->name('administrador.index');
Route::get('artistas/subirFoto',[ArtistasController::class,'subirFoto'])->name('artista.subirFoto');


Route::get('/login',[InicioController::class,'login'])->name('home.InicioSesion');
Route::post('cuentas/login',[CuentasController::class,'login'])->name('cuentas.login');
