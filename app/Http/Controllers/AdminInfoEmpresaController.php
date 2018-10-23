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
        dd("Hola");
    }
}
