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

Route::get('/', function () {
    return view('generalViews.inicio');
});

Route::resource('/paquetesPrivados','paquetesPrivadosController');
Route::resource('/contactos','contactosController');
Route::resource('/preguntasFrecuentes','preguntasFrecuentesController');
Route::resource('/hotelesRestaurantes','hotelesRestaurantesController');
Route::resource('/error404','error404Controller');
Route::resource('/descAtractivo','descAtractivoController');
Route::resource('/comparacionPrecios','comparacionPreciosController');
Route::resource('/actividadesDeAventura','actividadesDeAventuraController');
Route::resource('/seccionDescripcion','seccionDescripcionController');
Route::resource('/translados','transladosController');
Route::resource('/paquetesPrivadosPorDia','paquetesPrivadosPorDiaController');
