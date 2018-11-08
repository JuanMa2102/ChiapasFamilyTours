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
Route::resource('/itinerarioDetallado','itinerarioDetalladoController');
Route::resource('/actividadesDeAventura','actividadesDeAventuraController');
Route::resource('/seccionDescripcion','seccionDescripcionController');
Route::resource('/traslados','trasladosController');
Route::resource('/paquetesPrivadosPorDia','paquetesPrivadosPorDiaController');
Route::resource('/nosotros','nosotrosController');

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
Route::resource('administrador/infoEmpresa','AdminInfoEmpresaController');
Route::resource('administrador/adminTraslados','AdminTrasladosController');
Route::resource('administrador/adminContactos','AdminContactosController');
Route::resource('administrador/adminActividadAventura','adminActividadAventuraController');
Route::resource('administrador/slider', 'AdminSliderController');
Route::resource('administrador/paquetes', 'AdminPaquetesController');
Route::resource('administrador/paquetes/dias','AdminDiasController');
Route::resource('administrador/galeria','GaleriaController');
Route::resource('administrador/paquetes/dias/itinerarios', 'AdminItinerariosController');

Route::resource('administrador/preguntasFrecuentes/PreguntaDetalle', 'AdminPreguntasFrecuentesDetalleController');
Route::resource('administrador/preguntasFrecuentes', 'AdminPreguntasFrecuentesController');

Route::get('administrador/paquetes/dias/crearDia/{diaActual}',[
    'as' => 'crearDia',
    'uses' => 'AdminDiasController@createDia'
]);
//borrar galeria
Route::get('administrador/paquetes/dias/itinerarios/{paquete}/{dia}',[
    'as' => 'verItinerario',
    'uses' => 'AdminItinerariosController@verItinerario'
]);

Route::get('administrador/paquetes/dias/itinerario/edit-corto/{dia}',[
    'as' => 'editarCorto',
    'uses' => 'AdminItinerariosController@editarCorto'
]);

Route::get('administrador/paquetes/dias/itinerario/edit-largo/{dia}',[
    'as' => 'editarLargo',
    'uses' => 'AdminItinerariosController@editarLargo'
]);
Route::get('administrador/paquetes/dias/itinerario/add-section/{dia}',[
    'as' => 'addSection',
    'uses' => 'AdminItinerariosController@addSection'
]);

//PreguntasFrecuentes
Route::get('administrador/preguntasFrecuentes/PreguntaDetalle/add-section/{id}',[
    'as' => 'addPreguntaDetalle',
    'uses' => 'AdminPreguntasFrecuentesDetalleController@addSection'
]);

Route::get('administrador/PreguntaDetalle/{id}','AdminPreguntasFrecuentesDetalleController@Detalle'); 

//Galeria 
Route::get('administrador/galeriaDias/{id}','GaleriaController@galeria'); 


Route::resource('administrador/hoteles','AdminHotelesController');

