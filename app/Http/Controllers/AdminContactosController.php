<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminContactosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // dd("Días de " . $id);
        $contacto = DB::table('tbl_contacto')
        ->where('activo','=',1)
        ->get();
        return view("adminViews.contacto.index",['contacto'=>$contacto]);   
    }
    public function show($id)
    {
        $datos=DB::table('tbl_contacto')
        ->where('activo','=',1)
        ->where('id_contacto','=',$id)
        ->first();
        if($datos==null){
            return Redirect::to('administrador/adminContactos')->withErrors(['erroregistro'=> 'Error']);
        }
        else{
            $usuario=Auth::user()->id;
            $du =  DB::table('tbl_contacto')
            ->where('id_contacto', $id)
            ->update([
                'visto'=> 1,
                'usu_upd'=>$usuario
            ]);
            return view("adminViews.contacto.show",['datos'=>$datos]);
        }
    }
}
