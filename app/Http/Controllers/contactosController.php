<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class contactosController extends Controller
{
    //
    function index(){
        return view('generalViews.contactos');
    }

    public function store(Request $request)
    {
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $email = $request->get('email');
        $telefono = $request->get('telefono');
        $mensaje = $request->get('mensaje');

        dd("Nombre " . $nombre . "Apellido " .$apellido . "email " . $email . "telefono " . $telefono . "Mensaje " . $mensaje);
    }
    public function update(Request $request, $id){
        dd("Método update");
    }
    public function destroy($id){
        dd("Método destroy");
    }
}
