<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\TrabajadorMantenimiento;

class TrabajadorMantenimientoController extends Controller
{
    //
    public function index()
    {
        $trabajadoresMantenimiento = TrabajadorMantenimiento::all();

        return view('trabajadorMantenimiento.index', compact('trabajadoresMantenimiento'));
    }

    public function create()
    {
        $trabajadorMantenimiento = new TrabajadorMantenimiento();

        $departamentos = Departamento::all();

        return view('trabajadorMantenimiento.create', compact('trabajadorMantenimiento', 'departamentos'));
    }

    public function store(Request $request)
    {
        $datosTrabajadorMantenimiento = request()->except('_token');
        TrabajadorMantenimiento::insert($datosTrabajadorMantenimiento);
        return redirect('trabajadorMantenimiento')->with('mensaje', 'Trabajador registrado exitosamente');
    }
}
