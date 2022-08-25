<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Encomienda;

class EncomiendaController extends Controller
{
    //
    public function index(){
        $encomiendas = Encomienda::all();

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

        return redirect()->route('encomienda.index');
    }
}
