<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

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


Route::resource('jugador', JugadorController::class);
Route::resource('inicio', InicioController::class);

Route::resource('juego', JuegoController::class);

