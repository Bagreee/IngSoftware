<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Encomienda;

class EncomiendaRetiradaController extends Controller
{
    //

    public function index(){
        $encomiendas = Encomienda::all();

        return view('encomienda.retiradas', compact('encomiendas'));
    }

}
