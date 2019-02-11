<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class hotelesRestaurantesController extends Controller
{
    //
    function index(){
        $tipoHoteles = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->get();
        $hotel = DB::table('tbl_hoteles')
        ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.direccion as direccionHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_hoteles.imagen as imagenHotel',
                 'tbl_hoteles.id_TipoHotel as idTipoHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel')
        ->where('tbl_hoteles.activo','=',1)
        ->where('tbl_tipohotel.activo',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel','=','tbl_tipohotel.id_tipoHotel')
        ->paginate(10);
        return view('generalViews.hoteles-all',["hoteles"=>$hotel,
                                                "tipoHotel" => $tipoHoteles]);
    }
}
