<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/','inicioController');
Route::resource('/paquetesPrivados','paquetesPrivadosController');
Route::resource('/contactos','contactosController');
Route::resource('/preguntasFrecuentes','preguntasFrecuentesController');
Route::resource('/hotelesRestaurantes','hotelesRestaurantesController');
Route::resource('/error404','error404Controller');
Route::resource('/descAtractivo','descAtractivoController');
Route::resource('/comparacionPrecios','comparacionPreciosController');
Route::resource('/actividadesDeAventura','actividadesDeAventuraController');
Route::resource('/seccionDescripcion','seccionDescripcionController');
Route::resource('/traslados','trasladosController');
Route::resource('/paquetesPrivadosPorDia','paquetesPrivadosPorDiaController');


Route::get('paquetesPrivadosPorDia/{id}/{id_dias}',[
    'as' => 'paquetes-detalle',
    'uses' => 'paquetesPrivadosPorDiaController@show'
]); 

// Administrador rutas
Auth::routes(); //ruta cargar auth
Route::get('administrador', function() { //ruta login
    if(Auth::check()){
        return redirect('administrador/home');
    }
    return view('auth.login');
});
//Route::post('administrador/logout','Auth\LoginController@logout')->name('logout');
Route::post('administrador/login', 'Auth\LoginController@index')->name('administrador-login'); //ruta para iniciar sesion post
Route::get('administrador/home','HomeController@index')->name('administrador-home'); //ruta para ir al home admin

Route::resource('administrador/actividadAventura','adminActividadAventuraController');
Route::resource('administrador/adminTraslados','AdminTrasladosController');