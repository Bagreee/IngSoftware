<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
    return view('index');
});//->middleware('auth');

/*Route::get('/login', function () {
    return view('login');
});*/


//Route::get('/',[App\Http\Controllers\RegistroVisitaController::class, 'index']);

/*Route::get('/visita', function () {
    return view('visita.index');
});*/

Route::resource('visita',App\Http\Controllers\RegistroVisitaController::class);//->middleware('auth');
Route::resource('encomienda',App\Http\Controllers\EncomiendaController::class);//->middleware('auth');
Route::resource('trabajadorMantenimiento',App\Http\Controllers\TrabajadorMantenimientoController::class);//->middleware('auth');
Route::resource('salaEvento',App\Http\Controllers\SalaEventoController::class);//->middleware('auth');
Route::resource('propietario',App\Http\Controllers\PropietarioController::class);//->middleware('auth');

Route::get('/register',[App\Http\Controllers\RegisterController::class, 'create'])->name('register.index');//->middleware('auth');
Route::post('/register',[App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');//->middleware('auth');

Route::get('/login',[App\Http\Controllers\SessionsController::class, 'create'])->name('login.index');
Route::post('/login',[App\Http\Controllers\SessionsController::class, 'store'])->name('login.store');
Route::get('/logout',[App\Http\Controllers\SessionsController::class, 'destroy'])->name('login.destroy');

Route::get('/calendar', function () {
    return view('salaEvento/calendar');
});