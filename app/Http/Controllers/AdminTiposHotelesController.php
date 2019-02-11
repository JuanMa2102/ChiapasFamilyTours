<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminTiposHotelesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $tipos = DB::table('tbl_tipohotel')
        ->where('activo',1)
        ->get();

        return view("adminViews.tiposHotel.index",[
            'tipos'=>$tipos
        ]);
    }
    public function edit($id){
        $tipos = DB::table('tbl_tipohotel')
        ->where('activo',1)
        ->where('id_tipoHotel',$id)
        ->first();

        return view("adminViews.tiposHotel.edit",[
            'tipos'=>$tipos
        ]);
    }
    public function create(){
        return view("adminViews.tiposHotel.create");
    }
    public function store(Request $request){
        $opcion = 1;
        $desc = $request->get('tipo');
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_tiposHotel (
            '".$opcion."',
            '".$desc."',
            '".$usuario."',
            '1'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            return redirect()->back()->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/tipos-hoteles');
        
    }
    public function update(Request $request, $id){
        $opcion = 2;
        $desc = $request->get('tipo');
        $usuario = Auth::user()->id;
        $sql = "call spCSL_CRUD_tiposHotel (
            '".$opcion."',
            '".$desc."',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            return redirect()->back()->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/tipos-hoteles');
    }
    public function destroy($id){
        $opcion = 3;
        $usuario = Auth::user()->id;
        $sql = "call spCSL_CRUD_tiposHotel (
            '".$opcion."',
            'no importa',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            return redirect()->back()->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/tipos-hoteles');

    }
}
