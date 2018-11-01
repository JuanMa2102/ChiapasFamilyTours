<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class AdminGaleriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id){
        dd("Galeria de" . $id);
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
