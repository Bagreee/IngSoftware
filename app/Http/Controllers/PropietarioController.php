<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Propietario;
use App\Models\User;

class PropietarioController extends Controller
{
    //

    public function index()
    {
        //$propietarios = Propietario::all();
        $datos['propietarios'] = Propietario::paginate(5);

        return view('propietario.index', $datos);
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
        $datosPropietario['trabajador'] = auth()->user()->name;
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
