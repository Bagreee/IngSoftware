<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Propietario;

class RegistroPropietarioController extends Controller
{
    //

    public function index()
    {
        //$propietarios = Propietario::all();
        $datos['propietarios'] = Propietario::paginate(6);

        return view('registros.registroPropietario', $datos);
    }

}
