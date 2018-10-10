<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class hotelesRestaurantesController extends Controller
{
    //
    function index(){
        $hoteles = DB::table('tbl_hoteles')
        ->where('activo','=',1)
        ->get();
        return view('generalViews.hotelesRestaurantes',["hoteles"=>$hoteles]);
    }
}
