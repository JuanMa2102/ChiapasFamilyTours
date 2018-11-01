<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;
class AdminDiasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        // dd("Días de " . $id);
        $paqueteActual = DB::table('tbl_paquete')
        ->select('nombre')
        ->where('id_paquete','=',$id)
        ->first();
        $dias = DB::table('tbl_dias')
        ->where('id_paquete','=',$id)
        ->get();
        return view("adminViews.paquetes.dias.index",['dias'=>$dias,
                                                      'paquete'=>$paqueteActual,
                                                      'paqueteActual'=>$id]);   
    }
    public function create(){
        return view('adminViews.paquetes.dias.create');
    }
    public function createDia($id){
        return view('adminViews.paquetes.dias.create',['diaActual'=>$id]);
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
