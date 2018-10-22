<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminTrasladosController extends Controller
{
    function index(){
        
        return view('adminViews.Traslados.create');
    }

    public function store(Request $request)
    {
        
    }


}
