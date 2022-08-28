<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\SalaEvento;

class SalaEventoController extends Controller
{
    //
    public function index()
    {
        $eventos = SalaEvento::all();

        return view('salaEvento.index', compact('eventos'));
    }

    public function create()
    {
        $evento = new SalaEvento();

        $departamentos = Departamento::all();

        return view('salaEvento.create', compact('evento', 'departamentos'));
    }

    public function store(Request $request)
    {
        $datosEvento = request()->except('_token');
        SalaEvento::insert($datosEvento);
    }
}
