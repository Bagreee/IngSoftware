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
        //$trabajadoresMantenimiento = TrabajadorMantenimiento::all();
        $datos['trabajadoresMantenimiento'] = TrabajadorMantenimiento::paginate(6);

        return view('registros.registroTrabMant', $datos);
    }

}
