<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminInfoEmpresaController extends Controller
{
    public function index(){
        $informacion = DB::table('tbl_general')
        ->where('activo','=',1)
        ->first();
        return view('adminViews.infoEmpresa.infoGeneral.index',['informacion'=>$informacion]);
    }
    public function edit($id){
        $informacion = DB::table('tbl_general')
        ->where('activo','=',1)
        ->first();
        return view('adminViews.infoEmpresa.infoGeneral.edit',['informacion'=>$informacion]);
    }
    public function update(Request $request, $id){
        // dd($request->all());
        if($request->all()){
            $nombreEmpresa = $request->get('nombreEmpresa');
            $telefonoEmpresa = $request->get('telefono');
            $direccionEmpresa = $request->get('direccion');
            $correoEmpresa = $request->get('email');
            $misionEmpresa = $request->get('mision');
            $visionEmpresa = $request->get('vision');
            $valoresEmpresa = $request->get('valores');
            $videoEmpresa = $request->get('video');
            $usuario=Auth::user()->id;
            // Línea para verificar que los datos pasan
            // dd("Opción: " . $opcion . " Nombre " . $nombreEmpresa . " telefono " . $telefonoEmpresa . " direccion " . $direccionEmpresa . " email " . $correoEmpresa . " mision " . $misionEmpresa . " vision " . $visionEmpresa . " valores " . $valoresEmpresa . " logo " .$logoEmpresa . " video " . $videoEmpresa . " usuario " . $usuario);
            if($request->file('logo') == null){
                $opcion = 2;
                $sql = "call spCSL_CRUD_infoGeneral(
                    '".$opcion."',
                    '".$nombreEmpresa."',
                    '".$telefonoEmpresa."',
                    '".$direccionEmpresa."',
                    '".$correoEmpresa."',
                    '".$misionEmpresa."',
                    '".$visionEmpresa."',
                    '".$valoresEmpresa."',
                    'no importa',
                    '".$videoEmpresa."',
                    '".$usuario."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/infoEmpresa')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/infoEmpresa');
            }
            else{
                $imagenAnterior = DB::table('tbl_general') 
                ->select('logo')
                ->where('id_empresa','=',1)
                ->first();
                $getImageAnterior = $imagenAnterior->logo;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/infoGeneral', $request->file('logo'));
                $logoEmpresa = asset($path);
                $opcion = 1;
                $sql = "call spCSL_CRUD_infoGeneral(
                    '".$opcion."',
                    '".$nombreEmpresa."',
                    '".$telefonoEmpresa."',
                    '".$direccionEmpresa."',
                    '".$correoEmpresa."',
                    '".$misionEmpresa."',
                    '".$visionEmpresa."',
                    '".$valoresEmpresa."',
                    '".$logoEmpresa."',
                    '".$videoEmpresa."',
                    '".$usuario."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/infoEmpresa')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/infoEmpresa');
            }
        }
    }
}
