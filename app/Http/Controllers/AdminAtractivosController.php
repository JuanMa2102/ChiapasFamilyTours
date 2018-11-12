<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
use DB;

class AdminAtractivosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $atractivos = DB::table('tbl_atractivos')
        ->where('activo','=',1)
        ->get();
        return view ("adminViews.atractivos.index",['atractivos'=>$atractivos]);
    }
    public function create(){
        return view('adminViews.atractivos.create');
    }
    public function edit($id){
        $atractivo = DB::table('tbl_atractivos')
        ->where('id_atractivos','=',$id)
        ->where('activo','=',1)
        ->first();
        return view('adminViews.atractivos.edit',["atractivos"=>$atractivo]);
    }
    public function store(Request $request){
        $credentials=$this->validate(request(),[
            'nomAtractivo' => 'required|string|max:99'
        ]);
        $opcion = 1;
        $usuario=Auth::user()->id;
        $nombre = $request->get('nomAtractivo');
        $sql = "call spCSL_CRUD_atractivos (
            '".$opcion."',
            '".$nombre."',
            '".$usuario."',
            '1'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
        return Redirect::to('administrador/atractivos');

    }
    public function update(Request $request, $id){
        $opcion = 2;
        $usuario=Auth::user()->id;
        $nombre = $request->get('nomAtractivo');
        $sql = "call spCSL_CRUD_atractivos (
            '".$opcion."',
            '".$nombre."',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
        return Redirect::to('administrador/atractivos');
    }
    public function destroy($id){
        $imagenesAtractivos = DB::table('tbl_atractivosdetalles')
                                    ->select('imagen')
                                    ->where('activo','=',1)
                                    ->where('id_atractivos','=',$id)
                                    ->get();
        $cantidadImagenes = count($imagenesAtractivos);
    // dd($imagenesAtractivos[0]->imagen);
        for($i = 0; $i < $cantidadImagenes; $i++){
            $getImageAnterior = $imagenesAtractivos[$i]->imagen;
            $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
            if(Storage::disk('local')->exists($cadena)){
                $dele= Storage::disk('local')->delete($cadena);
            }
        }
        $opcion = 3;
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_atractivos (
            '".$opcion."',
            'no importa',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
        if($datos==null){
            // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
        return Redirect::to('administrador/atractivos');
    }

}
