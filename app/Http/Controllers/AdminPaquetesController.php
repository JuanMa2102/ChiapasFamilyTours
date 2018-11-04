<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminPaquetesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $paquetes = DB::table('tbl_paquete')
        ->where('activo','=',1)
        ->get();

        return view("adminViews.paquetes.index",["paquetes"=>$paquetes]);
    }
    public function create(){
        return view('adminViews.paquetes.create');
    }
    public function edit($id){
        $info = DB::table('tbl_paquete')
        ->where('activo','=',1)
        ->where('id_paquete','=',$id)
        ->first();
        return view("adminViews.paquetes.edit",["info"=>$info]);
    }
    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'nombrePaquete' => 'required|string|max:44',
            'descPaquete' => 'required|string|max:1499',
            'precio' => 'required|string|max:10',
            'titleImg' => 'required|string|max:99',
            'imgPaquete'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);
        if($request->file('imgPaquete')){
            $nombrePaquete = $request->get('nombrePaquete');
            $descPaquete = $request->get('descPaquete');
            $precio  = $request->get('precio');
            $titleImg = $request->get('titleImg');
            $path= Storage::disk('local')->put('uploads/paquetes', $request->file('imgPaquete'));
            $imgPaquete = asset($path);
            $usuario=Auth::user()->id;
            $opcion = 1;
            $sql = "call spCSL_CRUD_paquete(
                '".$opcion."',
                '".$titleImg."',
                '".$nombrePaquete."',
                '".$descPaquete."',
                '".$precio."',
                '".$imgPaquete."',
                '".$usuario."',
                '1'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/paquetes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/paquetes');
        }
        else{
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
    }
    public function update(Request $request, $id){
        if($request->file('imgPaquete')){
            $imagenAnterior = DB::table('tbl_paquete')
                ->select('imagen')
                ->where('id_paquete','=',$id)
                ->first();
            $getImageAnterior = $imagenAnterior->imagen;
            $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
            if(Storage::disk('local')->exists($cadena)){
                $dele= Storage::disk('local')->delete($cadena);
            }
            $path= Storage::disk('local')->put('uploads/paquetes', $request->file('imgPaquete'));
            $imgPaquete = asset($path);
            $nombrePaquete = $request->get('nombrePaquete');
            $descPaquete = $request->get('descPaquete');
            $precio  = $request->get('precio');
            $titleImg = $request->get('titleImg');
            $usuario=Auth::user()->id;
            $opcion = 2;
            $sql = "call spCSL_CRUD_paquete(
                '".$opcion."',
                '".$titleImg."',
                '".$nombrePaquete."',
                '".$descPaquete."',
                '".$precio."',
                '".$imgPaquete."',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/paquetes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/paquetes');
        }
        else{
            $nombrePaquete = $request->get('nombrePaquete');
            $descPaquete = $request->get('descPaquete');
            $precio  = $request->get('precio');
            $titleImg = $request->get('titleImg');
            $usuario=Auth::user()->id;
            $opcion = 3;
            $sql = "call spCSL_CRUD_paquete(
                '".$opcion."',
                '".$titleImg."',
                '".$nombrePaquete."',
                '".$descPaquete."',
                '".$precio."',
                'no importa',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/paquetes')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/paquetes');
        }
    }
    public function destroy($id){
        $imagenesItinerarioLargo = DB::table('tbl_itinerario')
                                    ->select('imagen')
                                    ->where('activo','=',1)
                                    ->whereIn('id_dias',
                                    DB::table('tbl_dias')
                                    ->select('id_dias')
                                    ->where('id_paquete','=',$id))
                                    ->get();
        $cantidadImagenes = count($imagenesItinerarioLargo);
    // dd($imagenesItinerarioLargo[0]->imagen);
        for($i = 0; $i < $cantidadImagenes; $i++){
            $getImageAnterior = $imagenesItinerarioLargo[$i]->imagen;
            $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
            if(Storage::disk('local')->exists($cadena)){
                $dele= Storage::disk('local')->delete($cadena);
            }
        }

        $imagenAnterior = DB::table('tbl_paquete')
                ->select('imagen')
                ->where('id_paquete','=',$id)
                ->first();
        $getImageAnterior = $imagenAnterior->imagen;
        $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        $usuario=Auth::user()->id;
        $opcion = 4;
        $sql = "call spCSL_CRUD_paquete(
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
            return Redirect::to('administrador/paquetes')->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/paquetes');
    }
}
