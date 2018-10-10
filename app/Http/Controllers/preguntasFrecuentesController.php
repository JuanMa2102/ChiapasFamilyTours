<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class preguntasFrecuentesController extends Controller
{
    //
    function index(){
        $preguntasfrecuentes = DB::table('tbl_preguntasfrecuentes')
        ->where('activo','=',1)
        ->get();
        $preguntasfrecuentesdetalle = DB::table('tbl_preguntasfrecuentesdetalle')
        ->where('activo','=',1)
        ->get();
        return view('generalViews.preguntasFrecuentes',['preguntasfrecuentes'=>$preguntasfrecuentes,
                                                        'preguntasfrecuentesdetalle'=>$preguntasfrecuentesdetalle]);
    }   
}
