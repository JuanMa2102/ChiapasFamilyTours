<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class itinerarioDetalladoController extends Controller
{
    public function index(){
        
    }
    public function show($id){
        $itinerario = DB::table('tbl_itinerario')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->get();
        $info = DB::table('tbl_dias')
        ->select('tbl_dias.cantidad as cantidad',
    			 'tbl_paquete.nombre as paquete')
        ->where('tbl_dias.id_dias',$id)
        ->where('tbl_dias.activo',1)
        ->join('tbl_paquete', 'tbl_paquete.id_paquete','=','tbl_dias.id_paquete')
        ->first();
        return view("generalViews.itinerarioDetallado",['itinerario'=>$itinerario,
    	'info' => $info,
    	'id'=>$id]);
    }
}
