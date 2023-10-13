<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //
    public function index() {
        return response()->json([
            "success"=>true, 
            "data"=>"Hola, soy Diego Pineda Fuentes",
            "message"=>"Registro Encontrado",
            "ammount"=>1
        ]);
    }
}
