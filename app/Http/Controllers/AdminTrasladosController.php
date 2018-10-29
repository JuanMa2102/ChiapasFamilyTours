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

    public function create()
    {                
        return view('adminViews.Traslados.create');
    }


    public function edit($id){
        $traslados = DB::table('tbl_traslados')
        ->where('activo','=',1)
        ->get();
        $trasladosdetalle = DB::table('tbl_trasladosdetalle')
        ->where('activo','=',1)
        ->get();
        return view('adminViews.Traslados.edit',["traslados"=>$traslados,
                                                    "trasladosdetalle"=>$trasladosdetalle,                                            
                                                    "id"=>1]);
    }

    public function store(Request $request,$id)
    {
        //dd($request->all());
            $path= Storage::disk('public')->put('uploads/Traslados', $request->file('file'));
            $imagen=asset($path);
            $nomtraslado=$request->get('nomtraslado');
            $usuario=1;

            $personas=$request->get('personas');
            $precio=$request->get('precio');

            $sql_traslado = "call spCSL_CRUD_Traslados
            (                
                '".$imagen."',
                '".$nombre."',
                '".$usuario."',                                            
            )";

            $datos_traslados =  DB::select($sql_traslado, array(1,10));
            $id = (int)$datos_traslados[0]->id;

            foreach ($datos_traslados as $key){
                $sql_trasladosDetalle = "call spCSL_CRUD_TrasladosDetalle
                (
                '".$id."',
                '".$numero."',
                '".$personas."',
                '".$precio."',
                '".$usuario."'
                )";
            }

            $datos_trasladosDetalle = DB::select($sql_trasladosDetalle,array(1,5));

            if($datos_traslados != null)
            {
                return Redirect::to('/administrador/adminTraslados');
            }
            else
            {
                return Redirect::to('/administrador/adminTraslados')->with("error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
            }

    }


}
