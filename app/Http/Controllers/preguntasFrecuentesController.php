<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preguntasFrecuentesController extends Controller
{
    //
    function index(){
        return view('generalViews.preguntasFrecuentes');
    }
}
