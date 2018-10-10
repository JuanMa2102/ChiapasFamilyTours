<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class contactosController extends Controller
{
    //
    function index(){
        return view('generalViews.contactos');
    }
}
