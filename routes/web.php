<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConserjeController;
use App\Http\Controllers\MayordomoController;
use App\Http\Controllers\JuntaDeVecinosController;

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
})->middleware('auth');

/*Route::get('/login', function () {
    return view('login');
});*/


//Route::get('/',[App\Http\Controllers\RegistroVisitaController::class, 'index']);

/*Route::get('/visita', function () {
    return view('visita.index');
});*/

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::resource('visita',App\Http\Controllers\RegistroVisitaController::class)->middleware('auth');
Route::resource('encomienda',App\Http\Controllers\EncomiendaController::class)->middleware('auth');
Route::resource('retiradas',App\Http\Controllers\EncomiendaRetiradaController::class)->middleware('auth');//
Route::resource('trabajadorMantenimiento',App\Http\Controllers\TrabajadorMantenimientoController::class)->middleware('auth');
Route::resource('salaEvento',App\Http\Controllers\SalaEventoController::class)->middleware('auth');
Route::resource('propietario',App\Http\Controllers\PropietarioController::class)->middleware('auth');

Route::get('/register',[App\Http\Controllers\RegisterController::class, 'create'])->name('register.index');//->middleware('auth');
Route::post('/register',[App\Http\Controllers\RegisterController::class, 'store'])->name('register.store');//->middleware('auth');

Route::get('/login',[App\Http\Controllers\SessionsController::class, 'create'])->name('login.index');
Route::post('/login',[App\Http\Controllers\SessionsController::class, 'store'])->name('login.store');
Route::get('/logout',[App\Http\Controllers\SessionsController::class, 'destroy'])->name('login.destroy');

Route::get('/calendar', function () {
    return view('salaEvento/calendar');
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
//Route::get('/conserje', [App\Http\Controllers\ConserjeController::class, 'index'])->middleware('auth.conserje')->name('conserje.index');
Route::get('/mayordomo', [App\Http\Controllers\MayordomoController::class, 'index'])->middleware('auth.mayordomo')->name('mayordomo.index');
Route::get('/juntaDeVecinos', [App\Http\Controllers\JuntaDeVecinosController::class, 'index'])->middleware('auth.juntaDeVecinos')->name('juntaDeVecinos.index');



Route::get('/registros', function () {
    return view('registros/home');
})->middleware('auth');

/*Route::get('/registroEncomienda', function () {
    return view('registros/registroEncomienda');
})->middleware('auth.admin');*/

Route::get('/registroEncomienda',[App\Http\Controllers\RegistroEncomiendaController::class, 'index'])->middleware('auth.admin');

/*Route::get('/registroPropietario', function () {
    return view('registros/registroPropietario');
})->middleware('auth.admin');*/

Route::get('/registroPropietario',[App\Http\Controllers\RegistroPropietarioController::class, 'index'])->middleware('auth.admin');

/*Route::get('/registroSalaEvento', function () {
    return view('registros/registroSalaEvento');
})->middleware('auth');*/

Route::get('/registroSalaEvento',[App\Http\Controllers\RegistroEventoController::class, 'index'])->middleware('auth');

/*Route::get('/registroTrabMant', function () {
    return view('registros/registroTrabMant');
})->middleware('auth');*/

Route::get('/registroTrabMant',[App\Http\Controllers\RegistroTrabMantController::class, 'index'])->middleware('auth');

/*Route::get('/registroVisita', function () {
    return view('registros/registroVisita');
})->middleware('auth.admin');*/

Route::get('/registroVisita',[App\Http\Controllers\RegistrosVisitasController::class, 'index'])->middleware('auth.admin');



Route::get('/calendario',[App\Http\Controllers\CalendarioController::class, 'index'])->middleware('auth');
Route::get('/calendario/show',[App\Http\Controllers\CalendarioController::class, 'show'])->middleware('auth');
Route::post('/calendario/create',[App\Http\Controllers\CalendarioController::class, 'store'])->middleware('auth');
Route::post('/calendario/edit/{id}',[App\Http\Controllers\CalendarioController::class, 'edit'])->middleware('auth');
Route::post('/calendario/update/{evento}',[App\Http\Controllers\CalendarioController::class, 'update'])->middleware('auth');
Route::post('/calendario/destroy/{id}',[App\Http\Controllers\CalendarioController::class, 'destroy'])->middleware('auth');
//Route::get('/calendario',[App\Http\Controllers\CalendarioController::class, 'create']);