<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Encomienda;

class RegistroEncomiendaController extends Controller
{
    //

    public function index(){
        $encomiendas = Encomienda::all();

        return view('registros.registroEncomienda', compact('encomiendas'));
    }

}
