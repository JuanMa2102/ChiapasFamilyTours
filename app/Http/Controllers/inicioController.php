<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class inicioController extends Controller
{
    //
    function index(){
        $slider = DB::table('tbl_slider')
        ->where('activo','=',1)
        ->get();
        $dias = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->get();
        $paquetes = DB::table('tbl_paquete')
        ->where('activo','=',1)
        ->get();
        $hotelesBoutique = DB::table('tbl_hoteles')
        ->where('recomendado','=',1)
        ->where('activo','=',1)
        ->where('id_TipoHotel','=',1)
        ->take(3)
        ->get();
        $hotelesCuatroEstrella = DB::table('tbl_hoteles')
        ->where('recomendado','=',1)
        ->where('activo','=',1)
        ->where('id_TipoHotel','=',2)
        ->take(3)
        ->get();
        $reserva = DB::table('tbl_reserva')
        ->where('activo','=',1)
        ->get();
        $reservaDetalle = DB::table('tbl_reservadetalle')
        ->where('activo','=',1)
        ->get();
        $infoGeneral = DB::table('tbl_general')
        ->where('activo','=',1)
        ->get();
        $atractivos = DB::table('tbl_atractivos')
        ->where('activo','=',1)
        ->get();
        $atractivosDetalle = DB::table('tbl_atractivosdetalles')
        ->where('activo','=',1)
        ->get();
        $ruta = DB::table('tbl_ruta')
        ->get();
        $elegirnos = DB::table('tbl_elegirnos')
        ->where('activo',1)
        ->get();
        
        return view("generalViews.inicio",["slider"=>$slider,
                                           "paquetes"=>$paquetes,
                                           "dias"=>$dias,
                                           "hotelesBoutique"=>$hotelesBoutique,
                                           "hotelesCuatroEstrella"=>$hotelesCuatroEstrella,
                                           "reserva"=>$reserva,
                                           "reservaDetalle"=>$reservaDetalle,
                                           "infoGeneral"=>$infoGeneral,
                                           "atractivos"=>$atractivos,
                                           "atractivosDetalle"=>$atractivosDetalle,
                                           "ruta"=>$ruta,
                                           "elegirnos" => $elegirnos
                                          ]);
    }
}
