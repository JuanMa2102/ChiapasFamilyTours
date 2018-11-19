<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class contactosController extends Controller
{
    //
    function index(){
        $infoGeneral = DB::table('tbl_general')
        ->where('activo','=',1)
        ->get();
        return view('generalViews.contactos',["infoGeneral"=>$infoGeneral]);
    }

    public function store(Request $request)
    {
        if($request->get('verificacion') != 4){
            return back()-with("Error","Error");
        }
        else{
            $nombre = $request->get('nombre');
            $apellido = $request->get('apellido');
            $email = $request->get('email');
            $telefono = $request->get('telefono');
            $mensaje = $request->get('mensaje');
            $opcion = 1;

            $sql = "call spCSL_setContacto (
                '".$opcion."',
                '".$nombre."',
                '".$apellido."',
                '".$email."',
                '".$telefono."',
                '".$mensaje."',
                '1'
            )";
            $datos = DB::select($sql,array(1,10));
            if($datos != null)
            {
                return redirect()->back()->with("success","Hemos recibido su solicitud. Nos comunicaremos con usted en breve.");;
            }
            else
            {
                return redirect()->back()->with("error","Tenemos problemas para recibir su solicitud. Porfavor inténtelo más tarde.");
            }
        }
        
    }
    public function update(Request $request, $id){
        dd("Método update");
    }
    public function destroy($id){
        dd("Método destroy");
    }
}
