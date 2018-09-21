<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seccionDescripcionController extends Controller
{
    //
    function index(){
        return view('generalViews.seccionDescripcion');
    }
}
