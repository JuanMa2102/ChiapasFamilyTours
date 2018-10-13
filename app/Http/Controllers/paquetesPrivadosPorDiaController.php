<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class PaquetesPrivadosPorDiaController extends Controller
{
    //
    function index(){
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
        
        $datos_contacto = DB::select($sql_contacto,array(1,11));

        if($datos_contacto != null )
        {
            return Redirect::to('/contactos');
        }
        else
        {
            return Redirect::to('/inicio')->with("error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
        }
    }


}
