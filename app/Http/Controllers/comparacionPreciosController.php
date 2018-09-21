<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comparacionPreciosController extends Controller
{
    //
    function index(){
        return view('generalViews.comparacionPrecios');
    }
}
