<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminGaleriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        $diaActual = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        $paqueteActual = $diaActual->id_paquete;
        $datos = DB::table('tbl_galeria')
        ->where('activo','=',1)
        ->where('id_dia','=',$id)
        ->get();
        return view("adminViews.galeria.index",["datos"=>$datos,
                                                "diaActual"=>$id,
                                                "paqueteActual"=>$paqueteActual]);
    }
    public function create(){
        return view("adminViews.galeria.create");
    }

    public function edit($id){
        $informacion = DB::table('tbl_galeria')
        ->where('activo','=',1)
        ->where('id_galeria','=',$id)
        ->first();
        $diaActual = $informacion->id_dia;
        return view("adminViews.galeria.edit",["informacion"=>$informacion,
                                                "diaActual"=>$diaActual]);
    }
    public function store(Request $request){
        dd("Store");
    }
    public function update(Request $request, $id){
        dd("Update " . $id);
    }
    public function destroy($id){
        dd("Destroy " . $id);
    }
}
