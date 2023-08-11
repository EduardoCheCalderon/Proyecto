<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RazasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Inicio', function () {
    return view('Inicio');
});

Route::get('Servicios', function () {
    return view('Servicios');
});

Route::get('Herramientas', function () {
    return view('Herramienta');
});

Route::get('Nosotros', function () {
    return view('Nosotros');
});

Route::get('pdf_mascota',[MascotaController::class,'Pdf']);

/* Mascotas */
Route::get('Mascotas',[MascotaController::class,'index']);
Route::get('Mascotas/{id}/Edit.mascotaEdit',[MascotaController::class, 'edit']);
Route::put('Mascotas/{id}',[MascotaController::class,'update']);
Route::post('Mascota',[MascotaController::class,'store']);
Route::delete('Mascotas{id}',[MascotaController::class,'destroy']);

/* Clientes */

Route::get('Cliente',[ClienteController::class,'index']);
Route::get('Cliente/{id}/Edit.clienteEdit',[ClienteController::class, 'edit']);
Route::put('Cliente/{id}',[ClienteController::class,'update']);
Route::post('Cliente',[ClienteController::class,'store']);
Route::delete('Cliente{id}',[ClienteController::class,'destroy']);

/* Citas */
Route::get('Mascotas',[MascotaController::class,'index']);
Route::get('Mascotas/{id}/editViews.mascotaEdit',[MascotaController::class, 'edit']);
Route::put('Mascotas/{id}',[MascotaController::class,'update']);
Route::post('Mascotas',[MascotaController::class,'store']);
Route::delete('Mascotas{id}',[MascotaController::class,'destroy']);

/* Razas */
Route::get('razas/{id}',[RazasController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/welcome', [LoginController::class, 'logout']);