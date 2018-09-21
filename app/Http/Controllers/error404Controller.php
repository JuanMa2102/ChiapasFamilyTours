<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class error404Controller extends Controller
{
    //
    function index(){
        return view('errorViews.error404');
    }
}
