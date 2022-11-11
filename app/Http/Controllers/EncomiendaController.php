<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Encomienda;

class EncomiendaController extends Controller
{
    //
    //const PAGINACION=20;
    public function index(){
        $encomiendas = Encomienda::all();

        //$encomiendas = Encomienda::where('estado','!=','null')->paginate($this::PAGINACION);

        return view('encomienda.index', compact('encomiendas'));
    }

    public function create(){
        $encomiendas = new Encomienda();

        $departamentos = Departamento::all();

        return view('encomienda.create', compact('encomiendas', 'departamentos'));
    }

    public function store(Request $request)
    {
        $datosEncomienda = request()->except('_token');
        Encomienda::insert($datosEncomienda);
        //return redirect()->route('encomienda.index');
        return redirect('encomienda')->with('mensaje', 'Encomienda registrada exitosamente');
    }

    public function edit($id)
    {
        $encomienda = Encomienda::find($id);

        return view('encomienda.edit',compact('encomienda')); 
    }

    public function update(Request $request, $id)
    {

        $encomienda=Encomienda::findOrFail($id);
        $encomienda->estado = $request->input('estado');
        $encomienda->save();

        return redirect('encomienda')->with('mensaje', 'Estado de encomienda actualizado');
    }
}
