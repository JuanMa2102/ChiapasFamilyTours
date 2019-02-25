<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminElegirnosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $info = DB::table('tbl_elegirnos')
        ->where('activo',1)
        ->get();
        return view('adminViews.elegirnos.index',['info'=>$info]);
    }
    public function edit($id){
        $info = DB::table('tbl_elegirnos')
        ->where('id_elegirnos',$id)
        ->where('activo',1)
        ->first();
        return view('adminViews.elegirnos.edit',['info'=>$info]);
    }
    public function update(Request $request, $id){
        $opcion = 1;
        $usuario=Auth::user()->id;
        $titulo = $request->get('titulo');
        $descripcion = $request->get('descripcion');
        $sql = "call spCSL_CRUD_elegirnos (
            '".$opcion."',
            '".$titulo."',
            '".$descripcion."',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            return Redirect::to('administrador/porque-elegirnos')->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/porque-elegirnos');
    }
}
