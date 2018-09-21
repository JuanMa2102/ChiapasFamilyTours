<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    //
    function index(){
        return view("generalViews.inicio");
    }
}
