<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Encomienda;
use App\Models\Propietario;

use App\Mail\NotificacionMailable;
use Illuminate\Support\Facades\Mail;

class EncomiendaController extends Controller
{
    //
    //const PAGINACION=20;
    public function index(){
        $encomiendas = Encomienda::all();
        $propietarios = Propietario::all();

        //$encomiendas = Encomienda::where('estado','!=','null')->paginate($this::PAGINACION);

        return view('encomienda.index', compact('encomiendas', 'propietarios'));
    }

    public function create(){
        $encomiendas = new Encomienda();

        $departamentos = Departamento::all();

        return view('encomienda.create', compact('encomiendas', 'departamentos'));
    }

    public function store(Request $request)
    {
        $correo = new NotificacionMailable;

        Mail::to('propietario1@user.com')->send($correo);

        //return "Mensaje enviado";

        $datosEncomienda = request()->except('_token');
        Encomienda::insert($datosEncomienda);
        
        return redirect('encomienda')->with('mensaje', 'Encomienda registrada y notificada exitosamente');
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
