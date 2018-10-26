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

        $diasPaquete = 1;
        return view("generalViews.paquetesPrivadosPorDia",["paquetes"=>$paquetes,
                                            "dias"=>$dias,
                                            "tipoHotel"=>$tipoHotel,
                                            "diasPaquete"=>$diasPaquete,
                                            "id"=>1]);
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

        $paqute = $request->get('paqueteCotizacion');
        $dias = $request->get('diasCotizacion');
        
        
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

        foreach ($datos_contacto as $key){
            $sql_cotiazacionDetalle = "call spCSL_setCotizacionDetalle
            (
            '".$id."',
            '".$paqute."',
            '".$dias."',
            '".$usuario."'
            )";
        }

        
        $datos_cotizacionDetalle = DB::select($sql_cotiazacionDetalle,array(1,5));

        
        if($datos_contacto != null)
        {
            return Redirect::to('/paquetesPrivadosPorDia');
        }
        else
        {
            return Redirect::to('/contactos')->with("error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
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

        $galeria = DB::table("tbl_galeria")
        ->where('id_dia','=',$id)
        ->where('activo','=',1)
        ->get();

        $itinerario = DB::table("tbl_itinerario")
        ->where('id_dias','=',$id_dia)
        ->where('activo','=',1)
        ->get();

        $diasDetalle = DB::table("tbl_diasdetalle")
        ->where('id_dias','=',$id_dia)
        ->where('activo','=',1)
        ->get();


        return view("generalViews.paquetesPrivadosPorDia",["paquetes"=>$paquetes,
                                            "dias"=>$dias,
                                            "tipoHotel"=>$tipoHotel,
                                            "diasPaquete"=>$diasPaquete,
                                            "id"=>$id,
                                            "id_dia"=>$id_dia,
                                            "galeria"=>$galeria,
                                            "itinerario"=>$itinerario,
                                            "diasDetalle"=>$diasDetalle]);
    }
}
