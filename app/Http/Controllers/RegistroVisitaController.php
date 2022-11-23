<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Visita;
use App\Models\User;

class RegistroVisitaController extends Controller
{
    //
    public function index(){
        //$visitas = Visita::all();
        $datos['visitas'] = Visita::paginate(5);

        return view('visita.index', $datos);
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
        $datosVisita['trabajador'] = auth()->user()->name;
        Visita::insert($datosVisita);
        return redirect('visita')->with('mensaje', 'Visita registrada exitosamente');
    }
}
