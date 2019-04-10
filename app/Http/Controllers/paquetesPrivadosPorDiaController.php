<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;

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
        $hotelElegido = DB::table('tbl_hoteles')
        ->where('activo','=',1)
        ->get();

        return view("generalViews.paquetesPrivadosPorDia",["paquetes"=>$paquetes,
                                            "dias"=>$dias,
                                            "tipoHotel"=>$tipoHotel,
                                            "hotelElegido"=>$hotelElegido]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $datosCliente = [];
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
        $hotelElegido = $request->get('hotelElegido');
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
            $temp1 = DB::table('tbl_paquete')->select('nombre')->where('id_paquete',$paqute[$i])->first();
            $temp2 = DB::table('tbl_dias')->select('cantidad')->where('id_dias',$dias[$i])->first();
            $datosCliente[$i] =  $temp1->nombre. " Y " . $temp2->cantidad . " DÍA(S)"; 
            $datos_cotizacionDetalle = DB::select($sql_cotiazacionDetalle,array(1,5));
        }
        $datosCliente[count($datosCliente)] =  $request->all();
        // dd($datosCliente[1]);
        Mail::send('generalViews.emailCotizacion',["datos"=>$datosCliente], function($messaje){
            $messaje->from('servicios.creativasoftline@gmail.com','Solicitud de Cotización');
            $messaje->to('reserva@chiapasfamilytours.com.mx')->subject('SOLICITUD DE COTIZACIÓN');   
            $messaje->to('jassselvas@gmail.com')->subject('SOLICITUD DE COTIZACIÓN');   
        });
        
        if($datos_contacto != null)
        {
            return redirect()->back()->with("success","Hemos recibido su solicitud. Nos comunicaremos con usted en breve.");;
        }
        else
        {
            return redirect()->back()->with("error","Tenemos problemas para recibir su solicitud. Porfavor inténtelo más tarde.");
        }
    }

     public function show($id, $id_dia) 
    {
        $info = DB::table('tbl_dias')
        ->select('tbl_dias.cantidad as cantidad',
                 'tbl_paquete.nombre as paquete')
        ->where('tbl_dias.id_dias',$id_dia)
        ->where('tbl_dias.activo',1)
        ->join('tbl_paquete', 'tbl_paquete.id_paquete','=','tbl_dias.id_paquete')
        ->first();
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
                 'tbl_hoteles.id_municipio as id_municipio',
                 'tbl_municipios.nombre as municipio',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel',
                 'tbl_hoteles.id_TipoHotel as tpHotel',
                 'tbl_tipohotel.id_tipoHotel',
                 'tbl_hoteldia.id_hotelDia as idHotelDia',
                 'tbl_hoteldia.asociado as asociado')
        ->where('tbl_hoteles.activo','=',1)
        ->where('tbl_hoteldia.activo','=',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel', '=', 'tbl_tipohotel.id_tipoHotel')
        ->join('tbl_hoteldia','tbl_hoteles.id_hotel','=','tbl_hoteldia.id_hotel')
        ->join('tbl_municipios','tbl_hoteles.id_municipio','=', 'tbl_municipios.id_municipio')
        ->where('tbl_hoteldia.id_dias','=',$id_dia)
        ->orderBy('tbl_municipios.nombre','desc')
        ->orderBy('tbl_hoteles.prioridad','desc')
        ->orderBy('tbl_tipohotel.descripcion','desc')
        ->get();
        $precioHoteles = DB::table('tbl_desctablapordia')
        ->where('id_dias',$id_dia)
        ->where('activo',1)
        ->get();

        $galeria = DB::table("tbl_galeria")

        ->where('id_dia','=',$id_dia)
        ->where('activo','=',1)
        ->get();
       

        $diasDetalle = DB::table("tbl_dias")
        ->where('id_dias','=',$id_dia)
        ->where('activo','=',1)
        ->first();
        $itinerarioCorto = DB::table('tbl_dias')
        ->where('id_dias','=',$id_dia)
        ->where('activo','=',1)
        ->first();
        $infoGeneral = DB::table('tbl_general')
        ->where('activo',1)
        ->first();
    //    dd($hotelesIncluidos);
     
        

        return view("generalViews.paquetesPrivadosPorDia",["paquetes"=>$paquetes,
                                            "dias"=>$dias,
                                            "tipoHotel"=>$tipoHotel,
                                            "diasPaquete"=>$diasPaquete,
                                            "id"=>$id,
                                            "id_dia"=>$id_dia,
                                            "galeria"=>$galeria,
                                            "itinerarioCorto"=>$itinerarioCorto,
                                            "diasDetalle"=>$diasDetalle,
                                            'hoteles'=>$hotelesIncluidos,
                                            'precioHotel'=>$precioHoteles,
                                            'info'=>$info,
                                            'general'=>$infoGeneral]);
    }
}
