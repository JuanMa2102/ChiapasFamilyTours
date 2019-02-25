<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class clientesController extends Controller
{
    public function index(){
        $clientes = DB::table('tbl_clientes')
        ->where('activo',1)
        ->get();
        return view('generalViews.clientes',['clientes'=>$clientes]);
    }
}
