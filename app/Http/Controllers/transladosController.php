<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transladosController extends Controller
{
    //
    function index(){
        return view('generalViews.translados');
    }
}
