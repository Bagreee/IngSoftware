<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\TrabajadorMantenimiento;

class RegistroTrabMantController extends Controller
{
    //

    public function index()
    {
        $trabajadoresMantenimiento = TrabajadorMantenimiento::all();

        return view('registros.registroTrabMant', compact('trabajadoresMantenimiento'));
    }

}
