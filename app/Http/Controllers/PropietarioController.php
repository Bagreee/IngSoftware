<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    //

    public function index()
    {
        $propietarios = Propietario::all();

        return view('propietario.index', compact('propietarios'));
    }

    public function create()
    {
        $propietario = new Propietario();

        $departamentos = Departamento::all();

        return view('propietario.create', compact('propietario', 'departamentos'));
    }

    public function store(Request $request)
    {
        $datosPropietario = request()->except('_token');
        Propietario::insert($datosPropietario);
        return redirect('propietario')->with('mensaje', 'Propietario registrado exitosamente');
    }

    public function edit($id)
    {
        $propietario = Propietario::find($id);

        return view('propietario.edit',compact('propietario')); 
    }

    public function update(Request $request, $id)
    {

        $propietario=Propietario::findOrFail($id);
        $propietario->correo = $request->input('correo');
        $propietario->telefono = $request->input('telefono');
        $propietario->estado = $request->input('estado');
        $propietario->save();

        return redirect('propietario')->with('mensaje', 'Datos de propietario actualizados');
    }
}
