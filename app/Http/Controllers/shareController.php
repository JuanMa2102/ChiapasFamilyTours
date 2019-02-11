<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
use Mail;

class shareController extends Controller
{
    public $share;
    public function index(){
        dd("hola");
    }
    public function store(Request $request){
        // dd($request->all());
        $datos = [];
        $share = $request->get('friend');
        $url = $request->get('url');
        $paqueteActual = $request->get('paqueteActual');
        $diaActual = $request->get('diaActual');
        $infoPaquete = DB::table('tbl_paquete')
        ->select('tbl_paquete.nombre as nombre','tbl_paquete.descripcion as desc','tbl_paquete.imagen as image','tbl_dias.cantidad as cantidad')
        ->join('tbl_dias','tbl_paquete.id_paquete','=','tbl_dias.id_paquete')
        ->where('tbl_paquete.activo',1)
        ->where('tbl_dias.activo',1)
        ->where('tbl_paquete.id_paquete',$paqueteActual)
        ->where('tbl_dias.id_dias',$diaActual)
        ->first();
        
        $datos[0] = $infoPaquete;
        $datos[1] = $url;
        $datos[2] = $request->get('mine');
        $datos[3] = $request->get('emailMessage');
        



        Mail::send('generalViews.compartir',['datos'=>$datos], function($messaje) use ($share){
            
            $messaje->from('servicios.creativasoftline@gmail.com','Chiapas Family Tours - Enlace Compartido');
            // $messaje->to('reserva@chiapasfamilytours.com.mx')->subject('Chiapas Family Tours - Enlace Compartido');
            $messaje->to($share)->subject('Chiapas Family Tours - Enlace Compartido');
            
        });
        return redirect()->back()->with("success","Se ha compartido enlace con amigo.");;
    }
}
