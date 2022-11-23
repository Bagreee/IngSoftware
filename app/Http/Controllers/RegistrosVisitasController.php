<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Visita;

class RegistrosVisitasController extends Controller
{
    //

    public function index(){
        //$visitas = Visita::all();
        $datos['visitas'] = Visita::paginate(6);

        return view('registros.registroVisita', $datos);
    }

}
