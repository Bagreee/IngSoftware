<?php

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


//Route::get('/',[App\Http\Controllers\RegistroVisitaController::class, 'index']);

/*Route::get('/visita', function () {
    return view('visita.index');
});*/

Route::resource('visita',App\Http\Controllers\RegistroVisitaController::class);
Route::resource('encomienda',App\Http\Controllers\EncomiendaController::class);
Route::resource('trabajadorMantenimiento',App\Http\Controllers\TrabajadorMantenimientoController::class);
Route::resource('salaEvento',App\Http\Controllers\SalaEventoController::class);
