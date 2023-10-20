<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //

    /**
 * 
 * Esta es una función de prueba para la clase de desarrollo de backend, desarrollada por todo el equipo 19/10/2023.
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/ejecutar",
 *     tags={"ejecutar"},
 *     summary="Este es un Endpoint o metodo para obtener datos y mostrarlos al usuario",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelven todos los registros cuando la consulta sea satisfactoria"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="No se pudo realizar la ejecución al parecer hubo un error interno"
 *     )
 * ) 
 */

    public function index(){

        return response()->json([
            "sucess"=>true,
            "data"=>"HOLA, SOY HECTOR BLANCO",
            "message"=>"registro encontrado",
            "cantidad"=>1
        ]);
    }
}
