<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class PaquetesPrivadosPorDiaController extends Controller
{
    //
    public function index(){
    	$dias = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->get();
        $paquetes = DB::table('tbl_paquete')
        ->where('activo','=',1)
        ->get();
        $tipoHotel = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->get();

        return view("generalViews.paquetesPrivadosPorDia",["paquetes"=>$paquetes,
                                            "dias"=>$dias,
                                            "tipoHotel"=>$tipoHotel]);
    }

    public function store(Request $request)
    {
        $nombre=$request->get('nombre');
        $apellido=$request->get('apellido');
        $email=$request->get('email');
        $telefono=$request->get('telefono');
        $adultos=$request->get('numeroAdultos');
        $menores = $request->get('numeroMenores');
        $llegada = $request->get('llegada');
        $salida = $request->get('salida');
        $mensaje = $request->get('mensaje');
        $tipoHotel = $request->get('tipoHotel');
        $usuario=1;

        $paqute= $request->get('paqueteID');
        $dias = $request->get('diaID');
        
        $sql_contacto = "call spCSL_setCotizacion
        (
            
            '".$nombre."',
            '".$apellido."',
            '".$email."',
            '".$telefono."',
            '".$adultos."',
            '".$menores."',
            '".$llegada."',                                
            '".$salida."',
            '".$mensaje."',
            '".$tipoHotel."',
            '".$usuario."'
        )";
        
        $datos_contacto =  DB::select($sql_contacto, array(1,10));
        $id = (int)$datos_contacto[0]->id;

        for($i = 0; $i < count($paqute); $i++){
            $sql_cotiazacionDetalle = "call spCSL_setCotizacionDetalle
            (
            '".$id."',
            '".$paqute[$i]."',
            '".$dias[$i]."',
            '".$usuario."'
            )";
            $datos_cotizacionDetalle = DB::select($sql_cotiazacionDetalle,array(1,5));
        }
        
        if($datos_contacto != null)
        {
            return Redirect::to('/paquetesPrivados');
        }
        else
        {
            return Redirect::to('/paquetesPrivados')->with("error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
        }
    }

     public function show($id, $id_dia) 
    {
        $dias = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->get();
        $paquetes = DB::table('tbl_paquete')
        ->where('activo','=',1)
        ->get();
        $tipoHotel = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->get();

        $diasPaquete = DB::table("tbl_dias")
        ->where('id_paquete','=',$id)
        ->where('activo','=',1)
        ->get();
        $hotelesIncluidos = DB::table('tbl_hoteles')
        ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel',
                 'tbl_tipohotel.id_tipoHotel',
                 'tbl_hoteldia.id_hotelDia as idHotelDia')
        ->where('tbl_hoteles.activo','=',1)
        ->where('tbl_hoteldia.activo','=',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel', '=', 'tbl_tipohotel.id_tipoHotel')
        ->join('tbl_hoteldia','tbl_hoteles.id_hotel','=','tbl_hoteldia.id_hotel')
        ->where('tbl_hoteldia.id_dias','=',$id_dia)
        ->get();

        $galeria = DB::table("tbl_galeria")

        ->where('id_dia','=',$id_dia)
        ->where('tipo','=',0) // 0 sera de tipo galeria Días
        ->where('activo','=',1)
        ->get();
        

        $diasDetalle = DB::table("tbl_diasdetalle")
        ->where('id_dias','=',$id_dia)
        ->where('activo','=',1)
        ->get();
        $itinerarioCorto = DB::table('tbl_dias')
        ->where('id_dias','=',$id_dia)
        ->where('activo','=',1)
        ->first();


        return view("generalViews.paquetesPrivadosPorDia",["paquetes"=>$paquetes,
                                            "dias"=>$dias,
                                            "tipoHotel"=>$tipoHotel,
                                            "diasPaquete"=>$diasPaquete,
                                            "id"=>$id,
                                            "id_dia"=>$id_dia,
                                            "galeria"=>$galeria,
                                            "itinerarioCorto"=>$itinerarioCorto,
                                            "diasDetalle"=>$diasDetalle,
                                            'hoteles'=>$hotelesIncluidos]);
    }
}
