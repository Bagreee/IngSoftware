<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\TrabajadorMantenimiento;
use App\Models\User;

class TrabajadorMantenimientoController extends Controller
{
    //
    public function index()
    {
        //$trabajadoresMantenimiento = TrabajadorMantenimiento::all();
        $datos['trabajadoresMantenimiento'] = TrabajadorMantenimiento::paginate(5);

        return view('trabajadorMantenimiento.index', $datos);
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
        $datosTrabajadorMantenimiento['trabajador'] = auth()->user()->name;
        TrabajadorMantenimiento::insert($datosTrabajadorMantenimiento);
        return redirect('trabajadorMantenimiento')->with('mensaje', 'Trabajador registrado exitosamente');
    }
}
