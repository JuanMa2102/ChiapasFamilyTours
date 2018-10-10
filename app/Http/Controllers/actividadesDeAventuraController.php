<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class actividadesDeAventuraController extends Controller
{
    //
    function index(){
        $ActividadAventura = DB::table('tbl_actividadaventura')
        ->where('activo','=',1)
        ->get();
        $ActividadAventuraDetalle = DB::table('tbl_actividadaventuradetalle')
        ->get();
        return view("generalViews.actividadesDeAventura",["ActividadAventura"=>$ActividadAventura,
                                           "ActividadAventuraDetalle"=>$ActividadAventuraDetalle]);
    }
}
