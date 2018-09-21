<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hotelesRestaurantesController extends Controller
{
    //
    function index(){
        return view('generalViews.hotelesRestaurantes');
    }
}
