<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
Use DB;

class adminActividadAventuraController extends Controller 
{
     //
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $usuario = Auth::user()->id;
        $opcion = 3;
        $titulo=" ";
        $sql = "call spCSL_CRUD_actividadAventura
        (
            '".$opcion."',
            '".$id."',
            '".$usuario."',
            '".$titulo."',
            'No Importa',
            'no importa'
        )";
        
        $datos =  DB::select($sql, array(1,10));

        if($datos==null){
            return Redirect::to('/administrador/adminActividadAventura')->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('/administrador/adminActividadAventura');
    }

    public function store(Request $request)
    {
        $credentials=$this->validate(request(),[
            'nombreAventura' => 'required|string|max:5000',
            'img'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        $inlclusion = $request->get('inclusiones');
        $titulo=$request->get('nombreAventura');
        $id=0;
        $usuario=Auth::user()->id;
        $opcion=1;

        

        if($request->file('img')){
            $path= Storage::disk('local')->put('uploads/ActividadAventura', $request->file('img'));
            $imagen=asset($path);
       
            $sql_sol = "call spCSL_CRUD_actividadAventura
            (
                '".$opcion."',
                '".$id."',
                '".$usuario."',
                '".$titulo."',
                '".$imagen."',
                '".$inlclusion."'
            )";
            
            $datos =  DB::select($sql_sol, array(1,10));            
            if($datos != null)
            {
                return Redirect::to('administrador/adminActividadAventura');
            }
            else
            {
                return Redirect::to('administrador/adminActividadAventura')->with("error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
            }
        }
        else{
            return Redirect::to('administrador/adminActividadAventura')->withErrors(['erroregistro'=> 'Error']);
        }
    }

     public function update(Request $request, $id)
     {

            $titulo = $request->get('nombreActividad');
            $inlclusion = $request->get('inclusiones');
            $usuario=Auth::user()->id;
            

            if($request->file('img') == null){
                $opcion = 2;
                $sql = "call spCSL_CRUD_actividadAventura
                (
                    '".$opcion."',
                    '".$id."',
                    '".$usuario."',
                    '".$titulo."',
                    'No importa',
                    '".$inlclusion."' 
                )";
                $datos = DB::select($sql,array(1,10));
                
            }
            else 
            {
                $imagenAnterior = DB::table('tbl_actividadaventura') 
                ->select('imagen')
                ->where('id_actividadaventura','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/ActividadAventura', $request->file('img'));
                $imagen = asset($path);

                $opcion = 4;

                $sql = "call spCSL_CRUD_actividadAventura
                (
                    '".$opcion."',
                    '".$id."',
                    '".$usuario."',
                    '".$titulo."',
                    '".$imagen."',
                    '".$inlclusion."'
                )";            

                $datos = DB::select($sql,array(1,10));
            }
                if($datos==null){
                    return Redirect::to('administrador/adminActividadAventura')->withErrors(['erroregistro'=> 'Error']);
                }else{
                return Redirect::to('administrador/adminActividadAventura');
                }
        }
    
}
