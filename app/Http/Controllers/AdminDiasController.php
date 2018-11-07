<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
class AdminDiasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        // dd("Días de " . $id);
        $paqueteActual = DB::table('tbl_paquete')
        ->select('nombre')
        ->where('id_paquete','=',$id)
        ->first();
        $dias = DB::table('tbl_dias')
        ->where('id_paquete','=',$id)
        ->get();
        return view("adminViews.paquetes.dias.index",['dias'=>$dias,
                                                      'paquete'=>$paqueteActual,
                                                      'paqueteActual'=>$id]);   
    }
    public function create(){
        return view('adminViews.paquetes.dias.create');
    }
    public function createDia($id){
        return view('adminViews.paquetes.dias.create',['diaActual'=>$id]);
    }
    public function edit($id){
        $info = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        return view("adminViews.paquetes.dias.edit",["info"=>$info]);
    }
    public function store(Request $request){
        // dd($request->all());
        $paqueteActual = $request->get('paqueteActual');
        $opcion = 1;
        $numDias = $request->get('numDias');
        $descripcion = $request->get('descDia');
        $inclusiones = $request->get('inclusiones');
        $usuario=Auth::user()->id;
        
        $sql = "call spCSL_CRUD_dias (
            '".$opcion."',
            '".$numDias."',
            '".$descripcion."',
            '".$inclusiones."',
            '".$usuario."',
            '1',
            '".$paqueteActual."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
        return Redirect::to('administrador/paquetes/dias/'.$paqueteActual);
    }
    public function update(Request $request, $id){
        $paqueteActual = $request->get('paqueteActual');
        $opcion = 2;
        $numDias = $request->get('numDias');
        $descripcion = $request->get('descDia');
        $inclusiones = $request->get('inclusiones');
        $usuario=Auth::user()->id;

        $sql = "call spCSL_CRUD_dias(
            '".$opcion."',
            '".$numDias."',
            '".$descripcion."',
            '".$inclusiones."',
            '".$usuario."',
            '".$id."',
            '1'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
        return Redirect::to('administrador/paquetes/dias/'.$paqueteActual);
    }
    public function destroy($id){
        dd("Destroy " . $id);
    }
}
