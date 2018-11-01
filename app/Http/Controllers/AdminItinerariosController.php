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
        ->first();
        $infoLarga = DB::table('tbl_itinerario')
        ->where('id_dias','=',$idDia)
        ->get();
        
        return view("adminViews.paquetes.dias.itinerarios.index",['paqueteActual'=>$idPaquete,
                                                                  'info'=>$info->itinerariocorto,
                                                                  'infoLarga'=>$infoLarga,
                                                                  'diaActual' => $idDia]);
    }
    public function editarCorto($id){
        $info = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        return view("adminViews.paquetes.dias.itinerarios.editCorto",['info'=>$info]);
    }
    public function editarLargo($id){
        $diaActual = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        $info = DB::table('tbl_itinerario')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        return view("adminViews.paquetes.dias.itinerarios.editLargo",['info'=>$info,
                                                                      'diaActual' =>$diaActual]);
    }
    public function addSection($id){
        $info = DB::table('tbl_dias')
        ->where('activo','=',1)
        ->where('id_dias','=',$id)
        ->first();
        return view("adminViews.paquetes.dias.itinerarios.addSection",['info'=>$info]);
    }
    public function create(){
        dd("Creando");
    }
    public function edit($id){
        dd("Editando " . $id);
    }
    public function store(Request $request){
        dd("Store");
    }
    public function update(Request $request, $id){
        dd("Update " . $id);
    }
    public function destroy($id){
        dd("Destroy " . $id);
    }
}
