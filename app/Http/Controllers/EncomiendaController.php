<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Encomienda;
use App\Models\Propietario;
use App\Models\User;

use App\Mail\NotificacionMailable;
use Illuminate\Support\Facades\Mail;

class EncomiendaController extends Controller
{
    //
    //const PAGINACION=20;
    public function index(){
        //$encomiendas = Encomienda::all();
        //$propietarios = Propietario::all();

        $datos['encomiendas'] = Encomienda::paginate(3);

        return view('encomienda.index', $datos);
    }

    public function create(){
        $encomiendas = new Encomienda();

        $departamentos = Departamento::all();

        return view('encomienda.create', compact('encomiendas', 'departamentos'));
    }

    public function store(Request $request)
    {
        $correo = new NotificacionMailable;

        $propietarios = Propietario::all();

        $datosEncomienda = request()->except('_token');

        foreach($propietarios as &$propietario){
            if($datosEncomienda['id_dpto'] == $propietario['id_dpto']){
                $datosEncomienda['correo'] = $propietario['correo'];
            };
        };

        $datosEncomienda['trabajador'] = auth()->user()->name;

        Mail::to($datosEncomienda['correo'])->send($correo);

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
