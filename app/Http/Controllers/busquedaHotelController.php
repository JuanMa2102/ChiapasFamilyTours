<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class busquedaHotelController extends Controller
{
    public function store(Request $request)
    {
        $tipoHoteles = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->get();
        $busqueda = $request->get('buscarHoRe');
        $hotel = DB::table('tbl_hoteles')
        ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.direccion as direccionHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_hoteles.id_municipio as id_municipio',
                 'tbl_municipios.nombre as municipio',
                 'tbl_hoteles.imagen as imagenHotel',
                 'tbl_hoteles.id_TipoHotel as idTipoHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel')
        ->where('tbl_hoteles.activo','=',1)
        ->where('tbl_tipohotel.activo',1)
        ->where(\DB::raw("CONCAT(tbl_hoteles.nombre, ' ' , tbl_tipohotel.descripcion )"), "LIKE", "%$busqueda%")
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel','=','tbl_tipohotel.id_tipoHotel')
        ->join('tbl_municipios','tbl_hoteles.id_municipio','=', 'tbl_municipios.id_municipio')
        ->orderBy('tbl_municipios.prioridad','desc')
        ->orderBy('tbl_hoteles.prioridad','desc')
        ->paginate(10);

        return view("generalViews.hoteles-all",['hoteles'=>$hotel,
                                                'tipoHotel'=>$tipoHoteles]);
    }
    public function separarHoteles($idTipo){
        if($idTipo == "all"){
            $tipoHoteles = DB::table('tbl_tipohotel')
            ->where('activo','=',1)
            ->get();
            $hotel = DB::table('tbl_hoteles')
            ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.direccion as direccionHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_hoteles.id_municipio as id_municipio',
                 'tbl_municipios.nombre as municipio',
                 'tbl_hoteles.imagen as imagenHotel',
                 'tbl_hoteles.id_TipoHotel as idTipoHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel')
        ->where('tbl_hoteles.activo','=',1)
        ->where('tbl_tipohotel.activo',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel','=','tbl_tipohotel.id_tipoHotel')
        ->join('tbl_municipios','tbl_hoteles.id_municipio','=', 'tbl_municipios.id_municipio')
            ->paginate(10);
    
            return view("generalViews.hoteles-all",['hoteles'=>$hotel,
                                                    'tipoHotel'=>$tipoHoteles]);
        }
        else{
            $tipoHoteles = DB::table('tbl_tipohotel')
            ->where('activo','=',1)
            ->get();
            $hotel = DB::table('tbl_hoteles')
            ->select('tbl_hoteles.nombre as nombreHotel',
            'tbl_hoteles.direccion as direccionHotel',
            'tbl_hoteles.pagina as paginaHotel',
            'tbl_hoteles.id_municipio as id_municipio',
            'tbl_municipios.nombre as municipio',
            'tbl_hoteles.imagen as imagenHotel',
            'tbl_hoteles.id_TipoHotel as idTipoHotel',
            'tbl_tipohotel.descripcion as tipoHotel',
            'tbl_hoteles.id_hotel as idHotel')
   ->where('tbl_hoteles.activo','=',1)
   ->where('tbl_tipohotel.activo',1)
            ->where('tbl_tipohotel.id_tipoHotel','=',$idTipo)
            ->where('tbl_hoteles.activo','=',1)
            ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel','=','tbl_tipohotel.id_tipoHotel')
   ->join('tbl_municipios','tbl_hoteles.id_municipio','=', 'tbl_municipios.id_municipio')
            ->paginate(10);
    
            return view("generalViews.hoteles-all",['hoteles'=>$hotel,
                                                    'tipoHotel'=>$tipoHoteles]);
        }
        
    }
}
