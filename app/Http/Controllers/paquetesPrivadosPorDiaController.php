<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaquetesPrivadosPorDiaController extends Controller
{
    //
    function index(){
        return view('generalViews.paquetesPrivadosPorDia');
    }
}
