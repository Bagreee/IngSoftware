<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConserjeController extends Controller
{
    //
    public function index(){

        return view('conserje/home');
    }
}
