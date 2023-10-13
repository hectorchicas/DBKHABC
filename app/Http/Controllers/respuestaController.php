<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    //

    public function index(){

        return response()->json([
            "sucess"=>true,
            "data"=>"HOLA, SOY HECTOR BLANCO",
            "message"=>"registro encontrado",
            "cantidad"=>1
        ]);
    }
}
