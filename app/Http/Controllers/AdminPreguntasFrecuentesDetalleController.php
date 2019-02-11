<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminPreguntasFrecuentesDetalleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Detalle($id)
    {
        //
        //$this->idparameter=$id;
        \Session::put('idparameter',$id);
        return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle');
    }
    public function index(){
        if(!\Session::has('idparameter')){
            return Redirect::to('administrador/preguntasFrecuentes')->withErrors(['erroregistro'=> 'Error']);
        }
        $id=\Session::get('idparameter');

        $Detalle = DB::table('tbl_preguntasfrecuentesdetalle')
        ->where('activo','=',1)
        ->where('id_preguntaFrecuente','=',$id)
        ->get();
        
        return view("adminViews.preguntasFrecuentes.PreguntaDetalle.index",['Detalle'=>$Detalle,
                                                                  'id'=>$id]);
    }

    public function create(){
        return view("adminViews.preguntasFrecuentes.PreguntaDetalle.create");
    }
    public function edit($id){
        $informacion = DB::table('tbl_preguntasfrecuentesdetalle')
        ->where('activo','=',1)
        ->where('id_preguntasFrecuentesDetalle','=',$id)
        ->first();
        return view("adminViews.preguntasFrecuentes.PreguntaDetalle.edit",['informacion'=>$informacion]);
    }
    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'titulo' => 'required|string|max:5000', 
            'fuente' => 'required|string|max:5000',
            'descripcion' => 'required|string|max:5000',
            'tituloImagen' => 'required|string|max:5000',
            'imagenSeccion'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);

        if(!\Session::has('idparameter')){
            return Redirect::to('administrador/preguntasFrecuentes')->withErrors(['erroregistro'=> 'Error']);
        }
        $id=\Session::get('idparameter');

        $opcion = 1;
        $titulo = $request->get('titulo');
        $fuente = $request->get('fuente');
        $descripcion = $request->get('descripcion');
        $tituloImagen = $request->get('tituloImagen');
        $usuario=Auth::user()->id;
        if($request->file('imagenSeccion')){
            $path= Storage::disk('local')->put('uploads/preguntasFrecuentes', $request->file('imagenSeccion'));
            $imagen = asset($path);
            $sql = "call spCSL_CRUD_preguntasFrecuentesDetalle 
            (
                '".$opcion."',
                '".$usuario."',
                '".$id."',
                '".$titulo."',
                '".$tituloImagen."',
                '".$fuente."',
                '".$descripcion."',
                '".$imagen."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle');
        }
    }

    public function update(Request $request, $id){
            $credentials=$this->validate(request(),[
            'titulo' => 'required|string|max:5000', 
            'fuente' => 'required|string|max:5000',
            'descripcion' => 'required|string|max:5000',
            'tituloImagen' => 'required|string|max:5000',
            ]);
            
            $titulo = $request->get('titulo');
            $fuente = $request->get('fuente');
            $descripcion = $request->get('descripcion');
            $tituloImagen = $request->get('tituloImagen');
            $usuario=Auth::user()->id;

            if($request->file('imagenSeccion')){
                $imagenAnterior = DB::table('tbl_preguntasfrecuentesdetalle')
                ->select('imagen')
                ->where('id_preguntasFrecuentesDetalle','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/preguntasFrecuentes', $request->file('imagenSeccion'));
                $imagen = asset($path);
                $opcion = 2;
                 $sql = "call spCSL_CRUD_preguntasFrecuentesDetalle 
                (
                '".$opcion."',
                '".$usuario."',
                '".$id."',
                '".$titulo."',
                '".$tituloImagen."',
                '".$fuente."',
                '".$descripcion."',
                '".$imagen."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle')->withErrors(['erroregistro'=> 'Error']);
                    }
                return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle');
            }
            else{
                $opcion = 3;
                $sql = "call spCSL_CRUD_preguntasFrecuentesDetalle 
                (
                '".$opcion."',
                '".$usuario."',
                '".$id."',
                '".$titulo."',
                '".$tituloImagen."',
                '".$fuente."',
                '".$descripcion."',
                'no importa'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle')->withErrors(['erroregistro'=> 'Error']);
                    }
                return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle');
            }
    }
    public function destroy($id){
        $imagenAnterior = DB::table('tbl_preguntasfrecuentesdetalle')
                ->select('imagen')
                ->where('id_preguntasFrecuentesDetalle','=',$id)
                ->first();
        $getImageAnterior = $imagenAnterior->imagen;
        $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        $opcion = 4;
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_preguntasFrecuentesDetalle 
                (
                '".$opcion."',
                '".$usuario."',
                '".$id."',
                'No importa',
                'No importa',
                'No importa',
                'No importa',
                'no importa'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle')->withErrors(['erroregistro'=> 'Error']);
                    }
                return Redirect::to('administrador/preguntasFrecuentes/PreguntaDetalle');
    
    }
}
