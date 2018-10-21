<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminActividadAventuraController extends Controller
{
     //
    function index(){

        return view('adminViews.actividadesAventura.index');
    }    
}
