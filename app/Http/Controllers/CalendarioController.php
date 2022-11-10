<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\SalaEvento;
use Carbon\Carbon;

class CalendarioController extends Controller
{
    //
    public function index()
    {
        $departamentos = Departamento::all();
        return view('calendario.index', compact('departamentos'));
    }

    public function store(Request $request)
    {
        request()->validate(SalaEvento::$rules);
        $evento = SalaEvento::create($request->all());
    }

    public function show(SalaEvento $evento)
    {

        $evento = SalaEvento::all();
        return response()->json($evento);

    }

    public function edit($id)
    {

        $evento = SalaEvento::find($id);
        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
        $evento->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');
        return response()->json($evento);

    }

    public function destroy($id)
    {

        $evento = SalaEvento::find($id)->delete();
        return response()->json($evento);

    }

    public function update(Request $request, SalaEvento $evento)
    {

        request()->validate(SalaEvento::$rules);
        $evento->update($request->all());
        return response()->json($evento);

    }

}
