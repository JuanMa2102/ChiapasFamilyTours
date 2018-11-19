<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminCotizacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // dd("Días de " . $id);
        $cotizacion = DB::table('tbl_cotizacion')
        ->where('activo','=',1)
        ->get();
        return view("adminViews.cotizacion.index",['cotizacion'=>$cotizacion]);   
    }
    public function show($id)
    {
        $paquetesElegidos = DB::table('tbl_paquete')
        ->select('tbl_paquete.nombre',
                 'tbl_dias.cantidad',
                 'tbl_cotizaciondetalle.id_cotizacionDetalle',
                 'tbl_paquete.id_paquete',
                 'tbl_dias.id_dias')
        ->where('tbl_cotizaciondetalle.activo','=',1)
        ->join('tbl_cotizaciondetalle', 'tbl_paquete.id_paquete', '=', 'tbl_cotizaciondetalle.id_paquete')
        ->join('tbl_dias','tbl_dias.id_dias','=','tbl_cotizaciondetalle.id_dias')
        ->where('id_cotizacion','=',$id)
        ->get();
        
        $datos=DB::table('tbl_cotizacion')
        ->where('activo','=',1)
        ->where('id_cotizacion','=',$id)
        ->first();
        $tipoHotel = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->where('id_tipoHotel','=',$datos->id_tipoHotel)
        ->first();
        
        if($datos==null){
            return Redirect::to('administrador/cotizacion')->withErrors(['erroregistro'=> 'Error']);
        }
        else{
            $usuario=Auth::user()->id;
            $du =  DB::table('tbl_cotizacion')
            ->where('id_cotizacion', $id)
            ->update([
                'visto'=> 1,
                'usu_upd'=>$usuario
            ]);
            return view("adminViews.cotizacion.show",['datos'=>$datos,
                                                      'paquetesElegidos'=>$paquetesElegidos,
                                                      'tipoHotel'=>$tipoHotel]);
        }
    }
}
