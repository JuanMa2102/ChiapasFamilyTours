<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itinerarioDetalladoController extends Controller
{
    public function index(){
        
    }
    public function show($id){
        return view("generalViews.itinerarioDetallado");
    }
}
