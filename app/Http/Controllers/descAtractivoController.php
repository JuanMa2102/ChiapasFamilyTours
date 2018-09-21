<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class descAtractivoController extends Controller
{
    //
    function index(){
        return view('generalViews.descAtractivo');
    }
}
