<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
use DB;

class AdminAtractivosDetalleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        $atractivos = DB::table('tbl_atractivosdetalles')
        ->where('id_atractivos','=',$id)
        ->where('activo','=',1)
        ->get();
        return view("adminViews.atractivos.atractivosDetalles.index",["atractivos"=>$atractivos,
                                                                      "atractivoActual"=>$id]);
    }
    public function crearAtractivo($id){
        return view("adminViews.atractivos.atractivosDetalles.addSection",["atractivoActual"=>$id]);
    }
    public function editarAtractivo($id){
        $atractivos = DB::table('tbl_atractivosdetalles')
        ->where('id_atractivosdetalles','=',$id)
        ->where('activo','=',1)
        ->first();
        return view("adminViews.atractivos.atractivosDetalles.editSection",["atractivos"=>$atractivos,
                                                                            "atractivoActual"=>$atractivos->id_atractivos]);
    }
    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'tituloSeccion'=>'required|string|max:99',
            'textolateral' => 'required|string|max:5000', 
            'textopie' => 'required|string|max:5000',
            'imagenSeccion'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);

        
        $opcion = 1;
        $atractivoActual = $request->get('atractivoActual');
        $titulo = $request->get('tituloSeccion');
        $textolateral = $request->get('textolateral');
        $textopie = $request->get('textopie');
        $usuario=Auth::user()->id;
        if($request->file('imagenSeccion')){
            $path= Storage::disk('local')->put('uploads/atractivos', $request->file('imagenSeccion'));
            $imgSeccion = asset($path);
            $sql = "call spCSL_CRUD_atractivosDetalle (
                '".$opcion."',
                '".$titulo."',
                '".$imgSeccion."',
                '".$textolateral."',
                '".$textopie."',
                '".$usuario."',
                '".$atractivoActual."',
                '1'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/atractivos/detalles/'.$atractivoActual)->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/atractivos/detalles/'.$atractivoActual);
        }
    }
    public function update(Request $request, $id){
        $atractivoActual = $request->get('atractivoActual');
        $titulo = $request->get('tituloSeccion');
        $textolateral = $request->get('textolateral');
        $textopie = $request->get('textopie');
        $usuario=Auth::user()->id;
        if($request->file('imagenSeccion')){
            $imagenAnterior = DB::table('tbl_atractivosdetalles')
            ->select('imagen')
            ->where('id_atractivosdetalles','=',$id)
            ->first();
            $getImageAnterior = $imagenAnterior->imagen;
            $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
            if(Storage::disk('local')->exists($cadena)){
                $dele= Storage::disk('local')->delete($cadena);
            }
            $path= Storage::disk('local')->put('uploads/atractivos', $request->file('imagenSeccion'));
            $imgSeccion = asset($path);
            $opcion = 2;
            $sql = "call spCSL_CRUD_atractivosDetalle (
                '".$opcion."',
                '".$titulo."',
                '".$imgSeccion."',
                '".$textolateral."',
                '".$textopie."',
                '".$usuario."',
                '1',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/atractivos/detalles/'.$atractivoActual)->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/atractivos/detalles/'.$atractivoActual);
        }
        else{
            $opcion = 3;
            $sql = "call spCSL_CRUD_atractivosDetalle (
                '".$opcion."',
                '".$titulo."',
                'no importa',
                '".$textolateral."',
                '".$textopie."',
                '".$usuario."',
                '1',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/atractivos/detalles/'.$atractivoActual)->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/atractivos/detalles/'.$atractivoActual);
        }
        
    }
    public function destroy($id){
        $imagenAnterior = DB::table('tbl_atractivosdetalles')
        ->select('imagen')
        ->where('id_atractivosdetalles','=',$id)
        ->first();
        $getImageAnterior = $imagenAnterior->imagen;
        $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        $opcion = 4;
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_atractivosDetalle (
            '".$opcion."',
            'no importa',
            'no importa',
            'no importa',
            'no importa',
            '".$usuario."',
            '1',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
        return back();
    
    }
}
