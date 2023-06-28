<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CuentasController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\AdministradoresController;
use App\Http\Controllers\PerfilController;
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
//*
//VISTAS
Route::get('/',[InicioController::class,'index'])->name('home.index');
Route::get('inicio/index',[InicioController::class,'index'])->name('home.index');
Route::get('inicio/login',[InicioController::class,'login'])->name('home.InicioSesion');

Route::get('/index',[PerfilController::class,'index'])->name('perfil.index');
Route::post('/perfil',[PerfilController::class,'store'])->name('perfil.store');

Route::get('/index',[ArtistasController::class,'index'])->name('artista.index');
Route::get('artistas/subirFoto',[ArtistasController::class,'subirFoto'])->name('artista.subirFoto');

Route::post('/cuentas',[CuentasController::class,'store'])->name('cuentas.store');
Route::post('/artistas',[ArtistasController::class,'store'])->name('artista.store');
Route::delete('/cuentas/{cuenta}',[CuentasController::class,'destroy'])->name('cuentas.destroy');
Route::post('cuentas/login',[CuentasController::class,'login'])->name('cuentas.login');
Route::get('cuentas/logout',[CuentasController::class,'logout'])->name('cuentas.logout');

Route::get('/index/administrador',[AdministradoresController::class,'index'])->name('administrador.index');
route::get('/administrador/ListaPerfiles',[AdministradoresController::class,'ListaPerfiles'])->name('administrador.ListaPerfiles');
