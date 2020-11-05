<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorChido extends Controller
{

    public function index(){
        return view('plantilla');
    }

    public function Alexandre(){
        return view('pintores.Alexandre');
    }

    public function Henri(){
        return view('pintores.Henri');
    }

    public function Jean(){
        return view('pintores.Jean');
    }

    public function Pieter(){
        return view('pintores.Pieter');
    }

    public function Dali(){
        return view('pintores.Dali');
    }

    public function Contacto(){
        return view('contacto');
    }
}
