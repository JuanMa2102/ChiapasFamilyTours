<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;


class AdminHotelesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $hotel = DB::table('tbl_hoteles')
        ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.direccion as direccionHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_hoteles.imagen as imagenHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel')
        ->where('tbl_hoteles.activo','=',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel','=','tbl_tipohotel.id_tipoHotel')
        ->get();
        
        return view("adminViews.hoteles.index",['hotel'=>$hotel]);
    }
    public function create(){
        $hotel = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->get();
        return view("adminViews.hoteles.create",["hotel"=>$hotel]);
    }
    public function edit($id){
        $hotel = DB::table('tbl_hoteles')
        ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.direccion as direccionHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_hoteles.imagen as imagenHotel',
                 'tbl_hoteles.id_TipoHotel as idTipoHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel')
        ->where('tbl_hoteles.id_hotel','=',$id)
        ->where('tbl_hoteles.activo','=',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel','=','tbl_tipohotel.id_tipoHotel')
        ->first();
        $tipoHoteles = DB::table('tbl_tipohotel')
        ->where('activo','=',1)
        ->get();
        
        return view("adminViews.hoteles.edit",['hotel'=>$hotel,
                                                'tipoHoteles'=>$tipoHoteles]);
    }
    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'nombre' => 'required', 
            'url' => 'required',
            'pagina' => 'required',
            'tipo' => 'required',
            'imagenHotel'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        $nombre = $request->get('nombre');
        $url = $request->get('url');
        $pagina = $request->get('pagina');
        $tipoHotel = $request->get('tipo');
        $usuario=Auth::user()->id;
        if($request->file('imagenHotel')){
            $path= Storage::disk('local')->put('uploads/hoteles', $request->file('imagenHotel'));
            $imgHotel = asset($path);
            $opcion = 1;
            $sql = "call spCSL_CRUD_hoteles(
                '".$opcion."',
                '".$nombre."',
                '".$url."',
                '".$pagina."',
                '".$tipoHotel."',
                '".$imgHotel."',
                '".$usuario."',
                '1'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/hoteles')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/hoteles');
        }
        else{
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
    }
    public function update(Request $request, $id ){
        $nombre = $request->get('nombre');
        $url = $request->get('url');
        $pagina = $request->get('pagina');
        $tipoHotel = $request->get('tipo');
        $usuario=Auth::user()->id;
        if($request->file('imagenHotel')){
            $imagenAnterior = DB::table('tbl_hoteles')
                ->select('imagen')
                ->where('id_hotel','=',$id)
                ->first();
            $getImageAnterior = $imagenAnterior->imagen;
            $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
            if(Storage::disk('local')->exists($cadena)){
                $dele= Storage::disk('local')->delete($cadena);
            }
            $path= Storage::disk('local')->put('uploads/hoteles', $request->file('imagenHotel'));
            $imgHotel = asset($path);
            $opcion = 2;
            $sql = "call spCSL_CRUD_hoteles(
                '".$opcion."',
                '".$nombre."',
                '".$url."',
                '".$pagina."',
                '".$tipoHotel."',
                '".$imgHotel."',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/hoteles')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/hoteles');
        }
        else{
            $opcion = 3;
            $sql = "call spCSL_CRUD_hoteles(
                '".$opcion."',
                '".$nombre."',
                '".$url."',
                '".$pagina."',
                '".$tipoHotel."',
                'no importa',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/hoteles')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/hoteles');
        }
    }
    public function destroy($id){
        $imagenAnterior = DB::table('tbl_hoteles')
                ->select('imagen')
                ->where('id_hotel','=',$id)
                ->first();
        $getImageAnterior = $imagenAnterior->imagen;
        $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        $opcion = 4;
        $usuario=Auth::user()->id;
            $sql = "call spCSL_CRUD_hoteles(
                '".$opcion."',
                'no importa',
                'no importa',
                'no importa',
                '1',
                'no importa',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/hoteles')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/hoteles');
    }
}
