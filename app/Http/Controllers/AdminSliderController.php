<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $slider = DB::table('tbl_slider')
        ->where('activo','=',1)
        ->get();
        return view("adminViews.infoEmpresa.slider.index",['slider'=>$slider]);
    }

    public function create(){
        return view("adminViews.infoEmpresa.slider.create");
    }
    public function edit($id){
        $slider = DB::table('tbl_slider')
        ->where('activo','=',1)
        ->where('id_slider','=',$id)
        ->first();
        return view("adminViews.infoEmpresa.slider.edit",['slider'=>$slider]);
    }
    public function store(Request $request){
        
        $credentials=$this->validate(request(),[
            'imgPresentacion'=>'required|mimes:jpg,JPG,PNG,jpeg,png|max:5000'
        ]);
    
        $tituloP = $request->get('tituloP');
        $subtituloP = $request->get('subtituloP');
        $usuario=Auth::user()->id;
        if($request->file('imgPresentacion')){
                $path= Storage::disk('local')->put('uploads/slider', $request->file('imgPresentacion'));
                $imgPresentacion = asset($path);
                $opcion = 1;
                $sql = "call spCSL_CRUD_slider(
                    '".$opcion."',
                    '".$tituloP."',
                    '".$subtituloP."',
                    '".$imgPresentacion."',
                    '".$usuario."',
                    '1'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/slider');
        }
        else{
            return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
        }
    }
    public function update(Request $request, $id){
        $credentials=$this->validate(request(),[
            'tituloP' => 'required|string|max:199', 
            'subtituloP' => 'required|string|max:99',
            'imgPresentacion'=>'mimes:jpg,jpeg,png|max:5000'
        ]);
        $tituloP = $request->get('tituloP');
        $subtituloP = $request->get('subtituloP');
        $usuario=Auth::user()->id;
        if($request->file('imgPresentacion')){
            $imagenAnterior = DB::table('tbl_slider')
                ->select('imagen')
                ->where('id_slider','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/slider', $request->file('imgPresentacion'));
                $imgPresentacion = asset($path);
            $opcion = 2;
            $sql = "call spCSL_CRUD_slider(
                '".$opcion."',
                '".$tituloP."',
                '".$subtituloP."',
                '".$imgPresentacion."',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
                return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
            }
            return Redirect::to('administrador/slider');
    }
    else{

        $opcion = 3;
            $sql = "call spCSL_CRUD_slider(
                '".$opcion."',
                '".$tituloP."',
                '".$subtituloP."',
                'no importa',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos==null){
                // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
                return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
            }
            return Redirect::to('administrador/slider');
        
    }

    }
    public function destroy($id){
        $imagenAnterior = DB::table('tbl_slider')
                ->select('imagen')
                ->where('id_slider','=',$id)
                ->first();
        $getImageAnterior = $imagenAnterior->imagen;
        $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        $opcion = 4;
        $usuario=Auth::user()->id;
        $sql = "call spCSL_CRUD_slider(
            '".$opcion."',
            'no importa',
            'no importa',
            'no importa',
            '".$usuario."',
            '".$id."'
        )";
        $datos = DB::select($sql,array(1,10));
            if($datos==null){
                // return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
                return redirect()->back()->withErrors(['erroregistro'=> 'Error'])->withInput();
            }
            return Redirect::to('administrador/slider');
    }
}
