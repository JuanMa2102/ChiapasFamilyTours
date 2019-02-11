<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminRutaController extends Controller
{
    public function index(){
        $ruta = DB::table('tbl_ruta')
        ->where('activo','=',1)
        ->get();

        return view("adminViews.ruta.index",['ruta'=>$ruta]);
    }

    public function edit($id){
        $ruta = DB::table('tbl_ruta')
        ->where('activo','=',1)
        ->where('id_ruta','=',$id)
        ->first();

        return view("adminViews.ruta.edit",['ruta'=>$ruta]);
    }

    public function update(Request $request, $id){
        $descripcion = $request->get('descripcion');
        $usuario=Auth::user()->id;

        if($request->file('imagenRuta')){
            $imagenAnterior = DB::table('tbl_ruta')
                ->select('imagen')
                ->where('id_ruta','=',$id)
                ->first();
            $getImageAnterior = $imagenAnterior->imagen;
            $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
            if(Storage::disk('local')->exists($cadena)){
                $dele= Storage::disk('local')->delete($cadena);
            }
            $path= Storage::disk('local')->put('uploads/ruta', $request->file('imagenRuta'));
            $imagenRuta = asset($path);
            $opcion = 1;
            $sql = "call spCSL_CRUD_rutaTrabajo (
                '".$opcion."',
                '".$imagenRuta."',
                '".$descripcion."',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/rutaTrabajo')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/rutaTrabajo');
        }
        else{
            $nombrePaquete = $request->get('nombrePaquete');
            $descPaquete = $request->get('descPaquete');
            $precio  = $request->get('precio');
            $preciotachado = $request->get('preciotachado');
            $subtituloprecio = $request->get('subtituloprecio');
            $titleImg = $request->get('titleImg');
            $usuario=Auth::user()->id;
            $opcion = 2;
            $sql = "call spCSL_CRUD_rutaTrabajo(
                '".$opcion."',
                'no importa',
                '".$descripcion."',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/rutaTrabajo')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/rutaTrabajo');
        }
    }
}
