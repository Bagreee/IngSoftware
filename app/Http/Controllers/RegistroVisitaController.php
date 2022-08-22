<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Visita;

class RegistroVisitaController extends Controller
{
    //
    public function index(){
        $visitas = Visita::all();

        return view('welcome', compact('visitas'));
    }
}
