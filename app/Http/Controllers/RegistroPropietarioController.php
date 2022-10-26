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
        $propietarios = Propietario::all();

        return view('registros.registroPropietario', compact('propietarios'));
    }

    public function create()
    {
        $propietario = new Propietario();

        $departamentos = Departamento::all();

        return view('registros.crearPropietario', compact('propietario', 'departamentos'));
    }

    public function store(Request $request)
    {
        $datosPropietario = request()->except('_token');
        Propietario::insert($datosPropietario);
        return redirect('registros.registroPropietario')->with('mensaje', 'Propietario registrado exitosamente');
    }

    public function edit($id)
    {
        $propietario = Propietario::find($id);

        return view('registros.modificarPropietario',compact('propietario')); 
    }

    public function update(Request $request, $id)
    {

        $propietario=Propietario::findOrFail($id);
        $propietario->correo = $request->input('correo');
        $propietario->telefono = $request->input('telefono');
        $propietario->estado = $request->input('estado');
        $propietario->save();

        return redirect('registros.registroPropietario')->with('mensaje', 'Datos de propietario actualizados');
    }

}
