<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //

    public function index()
    {

        $trabajadores = User::all();
        
        return view('registros.usuarios', compact('trabajadores'));

    }

    public function create(){

        return view('register');

    }

    public function store(){

        $user = User::create(request(['name', 'role', 'email', 'password']));

        //auth()->login($user);
        return redirect()->to('/login');

    }

    public function edit($id)
    {

        $trabajador = User::find($id);

        return view('registros.editarUsuario',compact('trabajador'));

    }

    public function update(Request $request, $id)
    {

        $trabajador = User::findOrFail($id);
        $trabajador->role = $request->input('role');
        $trabajador->email = $request->input('email');
        $trabajador->save();

        return redirect('usuarios');

    }

}