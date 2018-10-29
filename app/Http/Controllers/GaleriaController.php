<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
Use DB;

class GaleriaController extends Controller
{

    public function galeria($id)
    {
        //
        //$this->idparameter=$id;
        \Session::put('idparameter',$id);
        return Redirect::to('administrador/galeria');
    }

    public function index()
    {
        
        if(!\Session::has('idparameter')){
            return Redirect::to('administrador/home')->withErrors(['erroregistro'=> 'Error']);
        }
        $id=\Session::get('idparameter');
        $datos = DB::table('tbl_galeria')
        ->where('id_dia','=',$id)
        ->where('tipo','=',1)
        ->where('activo','=',1)
        ->get();

        if($datos==null){
            return Redirect::to('administrador/slider')->withErrors(['erroregistro'=> 'Error']);
        }
        return view('adminViews.galeria.index',['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminViews.galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!\Session::has('idparameter')){
            return Redirect::to('administrador/galeria')->withErrors(['erroregistro'=> 'Error']);
        }
        
        
        if($request->file('img')){
            $path= Storage::disk('local')->put('uploads/galeria', $request->file('img'));
            $imagen=asset($path);
            
            $descripcion = $request->get('descripcion');

            $opcion=1;
            $usuario=Auth::user()->id;
            $id=\Session::get('idparameter');
            $sql_sol = "call spCSL_CRUD_galeria
            (
                '".$opcion."',
                '".$imagen."',
                '".$descripcion."',
                '".$usuario."',
                '".$id."'
            )";
            $datos = DB::select($sql_sol,array(1,10));
            if($datos==null){
                return Redirect::to('administrador/galeria')->withErrors(['erroregistro'=> 'Error']);
            }
            return Redirect::to('administrador/galeria');

        }
        else{
            return Redirect::to('administrador/galeria')->withErrors(['erroregistro'=> 'Error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $informacion = DB::table('tbl_galeria')
        ->where('activo','=',1)
        ->where('tipo','=',1)
        ->where('id_galeria','=',$id)
        ->first();
        return view('adminViews.galeria.edit',['informacion'=>$informacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->all()){
            $descripcion = $request->get('descripcion');
            $usuario=Auth::user()->id;

            if($request->file('img') == null){
                $opcion = 3;
                $sql = "call spCSL_CRUD_galeria
                (
                    '".$opcion."',
                    'no importa',
                    '".$descripcion."',
                    '".$usuario."',
                    '".$id."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/galeria')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/galeria');
            }
            else{
                $imagenAnterior = DB::table('tbl_galeria') 
                ->select('imagen')
                ->where('id_galeria','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena)){
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/galeria', $request->file('img'));
                $imagen = asset($path);
                $opcion = 4;
                $sql = "call spCSL_CRUD_galeria
                (
                    '".$opcion."',
                    '".$imagen."',
                    '".$descripcion."',
                    '".$usuario."',
                    '".$id."'
                )";
                $datos = DB::select($sql,array(1,10));
                if($datos==null){
                    return Redirect::to('administrador/galeria')->withErrors(['erroregistro'=> 'Error']);
                }
                return Redirect::to('administrador/galeria');
            }


        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opcion=2;
        $usuario=Auth::user()->id;
        $imagen="no importa";
        $descripcion="no importa";
        $idimagen=$id;
        $sql_sol = "call spCSL_CRUD_galeria
            (
                '".$opcion."',
                '".$imagen."',
                '".$descripcion."',
                '".$usuario."',
                '".$idimagen."'
            )";
        $datos = DB::select($sql_sol,array(1,10));
        //recupero de la base de datos para eliminar en fisico!
        
        if($datos==null){
            return Redirect::to('administrador/galeria')->withErrors(['erroregistro'=> 'Error']);
        }
        $cadena=substr($datos[0]->imagen, 22 ,strlen ($datos[0]->imagen));   
        if(Storage::disk('local')->exists($cadena)){
            $dele= Storage::disk('local')->delete($cadena);
        }
        return Redirect::to('administrador/galeria');
    
    }
}
