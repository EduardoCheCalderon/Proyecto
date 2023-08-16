<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HerramientasController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RazasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
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
Route::get('pdf_cita',[CitaController::class,'Pdf']);

/* Mascotas */
Route::get('Mascotas',[MascotaController::class,'index']);
Route::get('Mascotas/{id}/Edit.mascotasEdit', [MascotaController::class,'edit']);
Route::put('Mascotas/{id}',[MascotaController::class,'update']);
Route::post('Mascotas',[MascotaController::class,'store']);
Route::delete('Mascotas{id}',[MascotaController::class,'destroy']);

/* Citas */
Route::get('Citas',[CitaController::class,'index']);
Route::get('Citas/{id}/Edit.citaEdit',[CitaController::class,'edit']);
Route::put('Citas/{id}',[CitaController::class,'update']);
Route::post('Citas',[CitaController::class,'store']);
Route::delete('Citas{id}',[CitaController::class,'destroy']);

/* Razas */
Route::get('razas/{id}',[RazasController::class, 'index']);

/* Herramientas */
Route::get('herramienta/{id}', [HerramientasController::class, 'index']);

Auth::routes();

Route::get('/welcome', [HomeController::class, 'index'])->name('home');
Route::post('/welcome', [LoginController::class, 'logout']);
