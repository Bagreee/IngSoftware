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

        return view('visita.index', compact('visitas'));
    }

    public function create(){
        
        $visita = new Visita();

        //$departamentos = Departamento::pluck('id','numero');
        $departamentos = Departamento::all();

        return view('visita.create', compact('visita', 'departamentos'));
    }

    public function store(Request $request)
    {
        $datosVisita = request()->except('_token');
        Visita::insert($datosVisita);
        return response()->json($datosVisita);
    }
}
