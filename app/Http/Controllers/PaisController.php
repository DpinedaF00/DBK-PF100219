<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    //

    public function crearPais(Request $request){
        $Pais = new Pais(); 
        $Pais->nombre_pais = $request->nombre;
        $Pais->save();

        return response()->json([
            "success"=>true,
            "message"=>"pais ingresado",
            "data"=>"Se creo el registro con el id: ".$Pais->id,
            "cantidad"=> 1
        ]);
    }

    public function obtener(){
        $Pais = new Pais(); 
        $datos = $Pais::All();

        return response()->json([
            "success"=>true,
            "message"=>"aqui estan todos los datos",
            "data"=>$datos,
            "cantidad"=> 1
        ]);
    }

    public function eliminarPais($id){
        //$Pais = new Pais(); 
        $Pais = Pais::find($id);

        if(isset($Pais)){
            $Pais->delete();
        }else{
            return response()->json([
            "success"=>false,
            "message"=>"pais no encontrado",
                
            ]);
        }

        return response()->json([
            "success"=>true,
            "message"=>"pais eliminado",
           
        ]);
    }
}
