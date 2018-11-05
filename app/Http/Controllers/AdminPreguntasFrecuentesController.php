<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
Use DB;

class adminPreguntasFrecuentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        // 
        $preguntas = DB::table('tbl_preguntasfrecuentes')
        ->where('activo','=',1)
        ->get();
        return view("adminViews.preguntasFrecuentes.index",['preguntas'=>$preguntas]);   
    }

    public function create(){
        return view('adminViews.preguntasFrecuentes.create');
    }

    public function edit($id){
        $informacion = DB::table('tbl_preguntasfrecuentes')
        ->where('activo','=',1)
        ->where('id_preguntaFrecuente','=',$id)     
        ->first();
        return view('adminViews.preguntasFrecuentes.edit',['informacion'=>$informacion]);
    }

    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'pregunta' => 'required|string|max:5000', 
            'respuesta' => 'required|string|max:5000'
        ]);

            $pregunta = $request->get('pregunta');
            $respuesta = $request->get('respuesta');
            $usuario=Auth::user()->id;
            
                $opcion = 1;
                $sql = "call spCSL_CRUD_preguntasFrecuentes
                (
                    '".$opcion."',
                    '0',
                    '".$usuario."',
                    '".$pregunta."',
                    '".$respuesta."'
                )";
                $datos = DB::select($sql,array(1,10));

            if($datos==null){
                    return Redirect::to('administrador/preguntasFrecuentes')->withErrors(['erroregistro'=> 'Error']);
            }
            else{
            return Redirect::to('administrador/preguntasFrecuentes');
            }
        //dd("Store " . $credentials);

    }
    public function update(Request $request, $id){
        //dd("Update " . $id);
        $credentials=$this->validate(request(),[
            'pregunta' => 'required|string|max:5000', 
            'respuesta' => 'required|string|max:5000'
        ]);

            $pregunta = $request->get('pregunta');
            $respuesta = $request->get('respuesta');
            $usuario=Auth::user()->id;
            
                $opcion = 2;
                $sql = "call spCSL_CRUD_preguntasFrecuentes
                (
                    '".$opcion."',
                    '".$id."',
                    '".$usuario."',
                    '".$pregunta."',
                    '".$respuesta."'
                )";
                $datos = DB::select($sql,array(1,10));

            if($datos==null){
                    return Redirect::to('administrador/preguntasFrecuentes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/preguntasFrecuentes');
    }
    public function destroy($id){

                $usuario=Auth::user()->id;
                $opcion = 3;
                $sql = "call spCSL_CRUD_preguntasFrecuentes
                (
                    '".$opcion."',
                    '".$id."',
                    '".$usuario."',
                    'No importa',
                    'No importa'
                )";
                $datos = DB::select($sql,array(1,10));

            if($datos==null){
                    return Redirect::to('administrador/preguntasFrecuentes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/preguntasFrecuentes');
            
    }
}
