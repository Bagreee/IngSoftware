<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    //
    public function create(){

        return view('login');

    }

    public function store(){

        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'Email o contraseña incorrecta',
            ]);
        }
        else{

            if(auth()->user()->role == 'admin'){

                return redirect()->route('admin.index');

            }
            elseif(auth()->user()->role == 'admin'){

                return redirect()->to('/');

            }

        }

    }

    public function destroy(){

        auth()->logout();

        return redirect()->to('/login');

    }

}
