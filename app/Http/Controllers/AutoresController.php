<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class AutoresController extends Controller
{
    //

    public function obtenerAutores(){

        $Autores = new Autores();
        $resultado = $Autores::all();

        return response()->json([
            "success"=>true,
            "message"=>"aqui estan todos los autores en el sistema",
            "data"=>$resultado,
            "errors" =>"",
            "cantidad"=> sizeof($resultado)
        ]);
    }
}
