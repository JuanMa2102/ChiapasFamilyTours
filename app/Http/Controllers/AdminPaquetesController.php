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
        dd("Editar " . $id);
    }
    public function store(Request $request){
        dd("Store");
    }
    public function update(Request $request, $id){
        dd("update " . $id);
    }
    public function destroy($id){
        dd("destroy" . $id);
    }
}
