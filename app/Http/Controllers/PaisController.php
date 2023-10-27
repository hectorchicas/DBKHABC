<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Pais;

class PaisController extends Controller
{
    public function crearPais(Request $request){
        $pais = new Pais();
        $pais->nombre_pais = $request->nombre;
        $pais->save();

        return response()->json([
            "succes" => true,
            "message" => "",
            "data" => "Se creo el registro con id: "+$pais->id,
            "cantidad" =>1

        ]);
    }
}
