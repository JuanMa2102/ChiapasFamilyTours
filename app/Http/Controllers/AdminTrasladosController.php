<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminTrasladosController extends Controller
{
    function index(){
        $traslados = DB::table('tbl_traslados')
        ->where('activo','=',1)
        ->get();
        $trasladosdetalle = DB::table('tbl_trasladosdetalle')
        ->where('activo','=',1)
        ->get();
        return view('adminViews.Traslados.index',["traslados"=>$traslados,
                                                    "trasladosdetalle"=>$trasladosdetalle,                                            
                                                    "id"=>1]);
    }

    public function store(Request $request)
    {
        
    }


}
