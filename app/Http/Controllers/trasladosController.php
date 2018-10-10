<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class trasladosController extends Controller
{
    //
    function index(){
        $traslados = DB::table('tbl_traslados')
        ->where('activo','=',1)
        ->get();
        $trasladosdetalle = DB::table('tbl_trasladosdetalle')
        ->where('activo','=',1)
        ->get();
        return view('generalViews.traslados',['traslados'=>$traslados,
                                              'trasladosdetalle'=>$trasladosdetalle]);
    }
}
