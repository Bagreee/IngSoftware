<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\SalaEvento;

class RegistroEventoController extends Controller
{
    //

    public function index()
    {
        $eventos = SalaEvento::all();

        return view('registros.registroSalaEvento', compact('eventos'));
    }
}
