<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actividadesDeAventuraController extends Controller
{
    //
    function index(){
        return view('generalViews.actividadesDeAventura');
    }
}
