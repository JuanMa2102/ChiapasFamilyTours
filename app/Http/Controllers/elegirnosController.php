<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class elegirnosController extends Controller
{
    public function index(){
        $info = DB::table('tbl_elegirnos')
        ->where('activo',1)
        ->get();
        return view('generalViews.porque-elegirnos',['info'=>$info]);
    }
}
