<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Use DB;

class adminActividadAventuraController extends Controller
{
     //
    function index(){

    	$ActividadAventura = DB::table('tbl_actividadaventura')
        ->where('activo','=',1)
        ->get();
        $ActividadAventuraDetalle = DB::table('tbl_actividadaventuradetalle')
        ->get();

        return view('adminViews.actividadesAventura.index',["ActividadAventura"=>$ActividadAventura,
                                           "ActividadAventuraDetalle"=>$ActividadAventuraDetalle]);
    }    

    public function create()
    {
        //
        
        return view('adminViews.actividadesAventura.create');
    }

    public function edit($id){
        $informacion = DB::table('tbl_actividadaventura')
        ->where('activo','=',1)
        ->where('id_actividadAventura','=',$id)     
        ->first();
        $informacionDetalle = DB::table('tbl_actividadaventuradetalle')
        ->where('activo','=',1)
        ->where('id_actividadAventura','=',$id) 
        ->get();
        return view('adminViews.actividadesAventura.edit',['informacion'=>$informacion,
                                                           'informacionDetalle'=>$informacionDetalle]);
    }

    public function destroy($id)
    {
        $usuario = 1;
        $opcion = 3;
        $sql = "call spCSL_CRUD_actividadAventura
        (
            '".$opcion."',
            '".$id."',
            '".$usuario."'
        )";
        
        $datos =  DB::select($sql, array(1,10));

        if($datos==null){
            return Redirect::to('administrador/adminActividadAventura')->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/adminActividadAventura');
    }
}
