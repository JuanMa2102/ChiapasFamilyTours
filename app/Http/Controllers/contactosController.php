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
        $opcion=1;
        $nombre=$request->get('nombre');
        $apellido=$request->get('apellido');
        $telefono=$request->get('telefono');
        $email=$request->get('email');
        $mensaje=$request->get('mensaje');
        $usuario=1;
        
        $sql_contacto = "call spCSL_setContacto
        (
            '".$opcion."',
            '".$nombre."',
            '".$apellido."',
            '".$email."',
            '".$telefono."',
            '".$mensaje."',
            '".$usuario."'
        )";

        $datos_contacto = DB::select($sql_contacto,array(1,10));

        if($datos_contacto != null)
        {
            return Redirect::to('/contactos')->with("success","Hemos recibido su solicitud. Nos comunicaremos con usted en su brevedad.");
        }
        else
        {
            return Redirect::to('/contactos')->with("error","Ha ocurrido un error al enviar su formulario. Inténtelo más tarde.");
        }
    }
}
