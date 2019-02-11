<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $clientes = DB::table('tbl_clientes')
        ->where('activo',1)
        ->get();
        return view("adminViews.clientes.index",['clientes'=>$clientes]);
    }
    public function edit($id){
        $clientes = DB::table('tbl_clientes')
        ->where('activo',1)
        ->where('id_clientes',$id)
        ->first();
        return view("adminViews.clientes.edit",['clientes'=>$clientes]);
    }
    public function create(){
        return view("adminViews.clientes.create");
    }
    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'nombre' => 'required',
            'mensaje' => 'required'
        ]);
        $nombre = $request->get('nombre');
        $mensaje = $request->get('mensaje');
        $opcion = 1;
        if($request->file('img')){
            $path= Storage::disk('local')->put('uploads/clientes', $request->file('img'));
            $imagen = asset($path);
        }
        else{
            $imagen = "0";
        }
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_Clientes (
            '".$opcion."',
            '".$nombre."',
            '".$mensaje."',
            '".$imagen."',
            '".$usuario."',
            '1'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            return Redirect::to('administrador/clientes')->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/clientes');

    }
    public function update(Request $request, $id){
        $credentials=$this->validate(request(),[
            'nombre' => 'required',
            'mensaje' => 'required'
        ]);
        $nombre = $request->get('nombre');
        $mensaje = $request->get('mensaje');
        $usuario=Auth::user()->id;
        if($request->file('img')){
            $opcion = 2;
            $imagenAnterior = DB::table('tbl_clientes')
                ->select('imagen')
                ->where('id_clientes','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/clientes', $request->file('img'));
                $imagen = asset($path);
                $sql = "call spCSL_CRUD_Clientes (
                    '".$opcion."',
                    '".$nombre."',
                    '".$mensaje."',
                    '".$imagen."',
                    '".$usuario."',
                    '".$id."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/clientes')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/clientes');
        }
        else{
            $opcion = 3;

            $sql = "call spCSL_CRUD_Clientes (
                '".$opcion."',
                '".$nombre."',
                '".$mensaje."',
                'no importa',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/clientes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/clientes');
        }

    }
    public function destroy($id){
        $opcion = 4;
        $usuario=Auth::user()->id;
        $imagenAnterior = DB::table('tbl_clientes')
                ->select('imagen')
                ->where('id_clientes','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $sql = "call spCSL_CRUD_Clientes (
                    '".$opcion."',
                    'no importa',
                    'no importa',
                    'no importa',
                    '".$usuario."',
                    '".$id."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/clientes')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/clientes');

    }
}
