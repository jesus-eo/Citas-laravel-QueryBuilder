<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CitasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Login
//Cuando pulso el botón de login de la página principal
Route::get('/login', [UserController::class, 'formlogin']);
Route::post('/login', [UserController::class, 'login']);
//Botón logout página principal
Route::get('/logout', [UserController::class, 'logout']);

//Citas
Route::get('/citas/index', [CitasController::class, 'index']);//Retorna vista principal
Route::get('/citas', [CitasController::class, 'index']);
Route::get('/citas/reservar', [CitasController::class, 'show']);//retorna vista formulario reserva
Route::post('/citas/{id}/{fecha}/{hora}/create', [CitasController::class, 'create']);//Hago la reserva añadiendola a la tabla citas y la borro de la tabla citaslibres
Route::get('/citas/anular', [CitasController::class, 'store']);//Retorna al formulario para anular la cita
Route::post('/citas/{id}/anular', [CitasController::class, 'anularCita']);//Borra la cita
Route::get('/citas/historial', [CitasController::class, 'historial']);
