<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminItinerariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        return view("adminViews.paquetes.dias.itinerarios.index");
    }
    public function verItinerario($idDia, $idPaquete){
        
        $info = DB::table('tbl_dias')
        ->select('itinerariocorto')
        ->where('id_dias','=',$idDia)
        ->where('activo','=',1)
        ->first();
        $infoLarga = DB::table('tbl_itinerario')
        ->where('activo','=',1)
        ->where('id_dias','=',$idDia)
        ->get();
        $hotelesIncluidos = DB::table('tbl_hoteles')
        ->select('tbl_hoteles.nombre as nombreHotel',
                 'tbl_hoteles.pagina as paginaHotel',
                 'tbl_tipohotel.descripcion as tipoHotel',
                 'tbl_hoteles.id_hotel as idHotel',
                 'tbl_tipohotel.id_tipoHotel',
                 'tbl_hoteldia.id_hotelDia as idHotelDia')
        ->where('tbl_hoteles.activo','=',1)
        ->where('tbl_hoteldia.activo','=',1)
        ->join('tbl_tipohotel', 'tbl_hoteles.id_TipoHotel', '=', 'tbl_tipohotel.id_tipoHotel')
        ->join('tbl_hoteldia','tbl_hoteles.id_hotel','=','tbl_hoteldia.id_hotel')
        ->where('tbl_hoteldia.id_dias','=',$idDia)
        ->get();
        
        return view("adminViews.paquetes.dias.itinerarios.index",['paqueteActual'=>$idPaquete,
                                                                  'info'=>$info->itinerariocorto,
                                                                  'infoLarga'=>$infoLarga,
                                                                  'diaActual' => $idDia,
                                                                  'hoteles' => $hotelesIncluidos]);
    }
   
    public function editarCorto($id){
        $info = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        return view("adminViews.paquetes.dias.itinerarios.editCorto",['info'=>$info]);
    }
    public function editarLargo($id){
        
        $itinerarioActual = DB::table('tbl_itinerario')
        ->where('activo','=',1)
        ->where('id_itinerario','=',$id)
        ->first();
        
        $diaActual = $itinerarioActual->id_dias;
        $paqueteActual = DB::table('tbl_dias')
        ->select('id_paquete')
        ->where('activo','=',1)
        ->where('id_dias','=',$diaActual)
        ->first();
        return view("adminViews.paquetes.dias.itinerarios.editLargo",['paqueteActual'=>$paqueteActual->id_paquete,
                                                                      'itinerarioActual'=>$itinerarioActual]);
    }
    public function addSection($id){
        $info = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        return view("adminViews.paquetes.dias.itinerarios.addSection",['info'=>$info]);
    }
  
    public function addHotel($id){
        $hoteles = DB::table('tbl_hoteles')
        ->where('activo','=',1)
        ->get();
        return view("adminViews.paquetes.dias.itinerarios.addHotel",['hotel'=>$hoteles,
                                                                     'diaActual'=>$id]);
    }
    public function store(Request $request){
        if($request->get('idDiaItinerario') == 'EsteNoEsItinerario'){
            $opcion = 1;
            $usuario=Auth::user()->id;
            $idDiaActual = $request->get('idPaqueteActual'); //Uso la variable de paquetes para no confundirme, pero de ahí es el día actual
            $hotelElegido = $request->get('hotel');
            $sql = "call spCSL_CRUD_addHotel(
                '".$opcion."',
                '".$hotelElegido."',
                '".$idDiaActual."',
                '".$usuario."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/paquetes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/paquetes');
        }
        $credentials=$this->validate(request(),[
            'textolateral' => 'required|string|max:5000', 
            'textopie' => 'required|string|max:5000',
            'imagenSeccion'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);

        
        $opcion = 2;
        $diaActual = $request->get('idDiaItinerario');
        $paqueteActual = $request->get('idPaqueteActual');
        $textolateral = $request->get('textolateral');
        $textopie = $request->get('textopie');
        $usuario=Auth::user()->id;
        if($request->file('imagenSeccion')){
            $path= Storage::disk('local')->put('uploads/itinerarioLargo', $request->file('imagenSeccion'));
            $imgSeccion = asset($path);
            $sql = "call spCSL_CRUD_itinerarios (
                '".$opcion."',
                'no importa',
                '".$imgSeccion."',
                '".$textolateral."',
                '".$textopie."',
                '".$usuario."',
                '".$diaActual."',
                '1'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/paquetes/dias/itinerarios/'.$diaActual.'/'.$paqueteActual)->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/paquetes/dias/itinerarios/'.$diaActual.'/'.$paqueteActual);
        }
    }
    public function update(Request $request, $id){
        if($request->get('tipoItinerario') == 'corto'){
            // dd("Se está editando itinerario corto");
            $itinerarioCorto = $request->get('itinerarioCorto');
            $opcion = 1;
            $paqueteActual = $request->get('idPaqueteActual');
            $usuario=Auth::user()->id;
            $sql = "call spCSL_CRUD_itinerarios(
                '".$opcion."',
                '".$itinerarioCorto."',
                'no importa',
                'no importa',
                'no importa',
                '".$usuario."',
                '".$id."',
                '1'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/paquetes/dias/itinerarios/'.$id.'/'.$paqueteActual)->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/paquetes/dias/itinerarios/'.$id.'/'.$paqueteActual);
        }
        else if($request->get('tipoItinerario') == 'largo'){
            $paqueteActual = $request->get('idPaqueteActual');
            $diaActual = $request->get('idDiaItinerario');
            $textolateral = $request->get('textolateral');
            $textopie = $request->get('textopie');
            $usuario=Auth::user()->id;
            if($request->file('imagenSeccion')){
                $imagenAnterior = DB::table('tbl_itinerario')
                ->select('imagen')
                ->where('id_itinerario','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/itinerarioLargo', $request->file('imagenSeccion'));
                $imagenSeccion = asset($path);
                $opcion = 3;
                $sql = "call spCSL_CRUD_itinerarios(
                    '".$opcion."',
                    'no importa',
                    '".$imagenSeccion."',
                    '".$textolateral."',
                    '".$textopie."',
                    '".$usuario."',
                    '1',
                    '".$id."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/paquetes/dias/itinerarios/'.$diaActual.'/'.$paqueteActual)->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/paquetes/dias/itinerarios/'.$diaActual.'/'.$paqueteActual);
            }
            else{
                $opcion = 4;
                $sql = "call spCSL_CRUD_itinerarios(
                    '".$opcion."',
                    'no importa',
                    'no importa',
                    '".$textolateral."',
                    '".$textopie."',
                    '".$usuario."',
                    '1',
                    '".$id."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/paquetes/dias/itinerarios/'.$diaActual.'/'.$paqueteActual)->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/paquetes/dias/itinerarios/'.$diaActual.'/'.$paqueteActual);
            }
        }
    }
    public function destroy($id){
        $imagenAnterior = DB::table('tbl_itinerario')
                ->select('imagen')
                ->where('id_itinerario','=',$id)
                ->first();
        $getImageAnterior = $imagenAnterior->imagen;
        $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        $opcion = 5;
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_itinerarios(
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
    public function eliminarHotel($id){
        $opcion = 1;
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_eliminarHotelIncluido(
            '".$opcion."',
            '".$usuario."',
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
