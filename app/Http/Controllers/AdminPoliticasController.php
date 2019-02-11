<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;


class AdminPoliticasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
        $datos = DB::table('tbl_politicas')
        ->where('activo','=',1)
        ->first();
        
        return view('adminViews.politicas.index',['datos'=>$datos]);
    }
    public function edit($id){
        $datos = DB::table('tbl_politicas')
        ->where('activo','=',1)
        ->where('id','=',$id)
        ->first();
        return view('adminViews.politicas.edit',['datos'=>$datos]);
    }
    public function update(Request $request, $id){
        $politicas = $request->get('politicas');
        $usuario=Auth::user()->id;
        $opcion = 1;

        
        $sql = "call spCSL_CRUD_politicas (
            '".$opcion."',
            '".$politicas."',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/politicas')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/politicas');
    }
}
