<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class descAtractivoController extends Controller
{
    //
    public function show($id){
        $detalles = DB::table('tbl_atractivosdetalles')
        ->where('activo','=',1)
        ->where('id_atractivos','=',$id)
        ->get();
        $nombre = DB::table('tbl_atractivos')
        ->select('nombre')
        ->where('id_atractivos',$id)
        ->first();
        return view("generalViews.descAtractivo",['detalles'=>$detalles,
    	'nombre'=>$nombre,
    	'id'=>$id]);
    }
}
