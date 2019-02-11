<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
Use DB;

class AdminTrasladosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    

    public function index()
    {
        $traslados = DB::table('tbl_traslados')
        ->where('activo','=',1)
        ->get();
        $trasladosdetalle = DB::table('tbl_trasladosdetalle')
        ->where('activo','=',1)
        ->get();
        return view('adminViews.Traslados.index',["traslados"=>$traslados,
                                                    "trasladosdetalle"=>$trasladosdetalle,                                            
                                                 ]);
    }

    public function create()
    {                
        return view('adminViews.Traslados.create');        
    }


    public function edit($id)
    {
        $traslados = DB::table('tbl_traslados')
        ->where('activo','=',1)
        ->where('id_traslados','=',$id) 
        ->first();
        $trasladosdetalle = DB::table('tbl_trasladosdetalle')
        ->where('activo','=',1)
        ->where('id_traslados','=',$id) 
        ->get();
        return view('adminViews.Traslados.edit',["traslados"=>$traslados,
                                                    "trasladosdetalle"=>$trasladosdetalle,                                            
                                                ]);
    }

    public function store(Request $request)
    {
        $credentials = $this -> validate(request(),
        [
            'nomTraslado' => 'required|string|max:5000',
            'img'=>'required|mimes:jpg,jpeg,png|max:5000'
        ]);
            
            $nombre = $request->get('nomTraslado');
            $id = 0;
            
            $usuario = Auth::user()->id;
            $opcion = 1;

            $personas=$request->get('personas');
            $precio=$request->get('precio');
            $numero = 0;
            
        if($request->file('img'))
        {
                $path = Storage::disk('local')->put('uploads/Traslados', $request->file('img'));
                $imagen = asset($path);

                $sql_traslados = "call spCSL_CRUD_Traslados
                (     
                    '".$opcion."',   
                    '".$id."',       
                    '".$nombre."',
                    '".$imagen."',                
                    '".$usuario."'                                        
                )";

                $datos_traslados =  DB::select($sql_traslados, array(1,10));
                $id = (int)$datos_traslados[0]->id;

            if($personas != null)
            {
                for($j = 0; $j < count($personas); $j++)
                {
                    if($personas[$j] != null)
                    {                
                        $sql_TrasladosDetalle = "call spCSL_CRUD_TrasladosDetalle
                        (
                            '".$opcion."',
                            '".$id."',
                            '".$numero."',   
                            '".$personas[$j]."', 
                            '".$precio[$j]."',   
                            '".$usuario."'  
                        )";
                        $datos_trasladosDetalle = DB::select($sql_TrasladosDetalle,array(1,5));
                    }
                }     
            }                          
        }
            if($datos_traslados != null)
            {
                return Redirect::to('administrador/adminTraslados');
            }
            else
            {
                return Redirect::to('administrador/adminTraslados')->with("Error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
            }
              
    }

    public function update(Request $request, $id)
    {

            $nombre = $request->get('nomTraslado');
            $personas = $request->get('personas');
            $precio = $request->get('precio');
            $usuario = Auth::user()->id;
            $numero = 0;
            

            if($request->file('img') == null)
            {
                $opcion = 2;
                $sql = "call spCSL_CRUD_Traslados
                (
                    '".$opcion."',
                    '".$id."',
                    '".$nombre."',
                    'No importa',
                    '".$usuario."'                     
                )";
                $datos = DB::select($sql,array(1,10));
                
            }
            else 
            {
                $imagenAnterior = DB::table('tbl_traslados') 
                ->select('imagen')
                ->where('id_traslados','=',$id)
                ->first();
                $getImageAnterior = $imagenAnterior->imagen;
                $cadena=substr($getImageAnterior, 22,strlen ($getImageAnterior));   
                if(Storage::disk('local')->exists($cadena))
                {
                    $dele= Storage::disk('local')->delete($cadena);
                }
                $path= Storage::disk('local')->put('uploads/Traslados', $request->file('img'));
                $imagen = asset($path);

                $opcion = 3;

                $sql = "call spCSL_CRUD_Traslados
                (
                    '".$opcion."',
                    '".$id."',
                    '".$nombre."',
                    '".$imagen."',
                    '".$usuario."'
                )";            

                $datos = DB::select($sql,array(1,10));
            }

            if($request->get('personas') == null)
            {
                $opcionCat = 2;
                $sql_sol = "call spCSL_CRUD_TrasladosDetalle
                (
                '".$opcionCat."',
                '".$id."',
                '".$numero."',
                '1',
                '1',
                '".$usuario."'
                )";

                $datos = DB::select($sql_sol,array(1,10));

            }
            else
            {
                
                $opcionCat1 = 3;
                $sql_sol = "call spCSL_CRUD_TrasladosDetalle
                (
                    '".$opcionCat1."',
                    '".$id."',
                    '".$numero."',
                    '1',
                    '1',
                    '".$usuario."'
                )";
                $datos = DB::select($sql_sol,array(1,10));
                
                $opcionCat = 4;
                for($i = 0; $i < count($personas); $i++)
                {
                    if($personas[$i] != null)
                    {
                            $sql_sol = "call spCSL_CRUD_TrasladosDetalle
                            (
                            '".$opcionCat."',
                            '".$id."',
                            '".$numero."',
                            '".$personas[$i]."',
                            '".$precio[$i]."',
                            '".$usuario."'
                            )";
                            $datos = DB::select($sql_sol,array(1,10));
                            if($datos==null)
                {
                    return Redirect::to('administrador/adminTraslados')->withErrors(['erroregistro'=> 'Error']);
                }
                    }
                }
            }

                if($datos==null)
                {
                    return Redirect::to('administrador/adminTraslados')->withErrors(['erroregistro'=> 'Error']);
                }
                else
                {
                    return Redirect::to('administrador/adminTraslados');
                }
    }

    public function destroy($id)
    {
        $usuario = Auth::user()->id;
        $opcion = 4;
        $nombre=" ";
        $sql = "call spCSL_CRUD_Traslados
        (
            '".$opcion."',
            '".$id."',
            '".$nombre."',
            'No importa',
            '".$usuario."'
        )";
        
        $datos =  DB::select($sql, array(1,10));

        if($datos==null)
        {
            return Redirect::to('administrador/adminTraslados')->withErrors(['erroregistro'=> 'Error']);
        }
        return Redirect::to('administrador/adminTraslados');
    }

}


