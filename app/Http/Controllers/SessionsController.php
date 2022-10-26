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

                return redirect()->to('/registros');

            }
            elseif(auth()->user()->role == 'conserje'){

                return redirect()->to('/');

            }
            elseif(auth()->user()->role == 'mayordomo'){

                return redirect()->to('/');

            }
            elseif(auth()->user()->role == 'juntaDeVecinos'){

                return redirect()->to('/registros');

            }
            else{
                return redirect()->to('/login');
            }

        }

    }

    public function destroy(){

        auth()->logout();

        return redirect()->to('/login');

    }

}
