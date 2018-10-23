<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class comparacionPreciosController extends Controller
{
    //
    function index(){
        $dias = DB::table("tbl_dias")
    	->where('activo','=',1)
        ->get();
        $paquete = DB::table("tbl_paquete")
    	->where('activo','=',1)
        ->get();
        
        $inclusion =  DB::select("call spCSL_getInclusion", array(1,10));

        return view('generalViews.comparacionPrecios',["dias"=>$dias,
    												   	"paquete"=>$paquete,
    												   	 "inclusion"=>$inclusion]);
    }    
}
