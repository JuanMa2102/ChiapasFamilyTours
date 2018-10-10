<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class paquetesPrivadosController extends Controller
{
    //
    function index(){
        $dias = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->get();
        $paquetes = DB::table('tbl_paquete')
        ->where('activo','=',1)
        ->get();
        return view("generalViews.paquetesPrivados",["paquetes"=>$paquetes,
                                           "dias"=>$dias]);
    }
}
