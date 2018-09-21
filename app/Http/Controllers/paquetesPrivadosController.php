<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paquetesPrivadosController extends Controller
{
    //
    function index(){
        return view('generalViews.paquetesPrivados');
    }
}
