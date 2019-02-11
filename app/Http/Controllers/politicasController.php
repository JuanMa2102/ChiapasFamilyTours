<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class politicasController extends Controller
{
    public function index(){
        $datos = DB::table('tbl_politicas')
        ->where('activo','=',1)
        ->first();

        return view('generalViews.politicas',['datos'=>$datos]);
    }

}
