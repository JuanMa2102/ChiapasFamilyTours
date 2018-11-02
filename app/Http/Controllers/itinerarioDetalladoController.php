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
        return view("generalViews.itinerarioDetallado",['itinerario'=>$itinerario]);
    }
}
