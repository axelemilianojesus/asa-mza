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

 Route::get('/', 'HomeController@index')->name('inicio');
// Route::get('/register', 'RegisterController@create');
// Route::post('/register', 'RegisterController@create');
Route::get('/working','HomeController@working');
Route::get('/admin','HomeController@admin');// ->middleware("Auth");
/*
|--------------------------------------------------------------------------
| USER CONTROLLER

|--------------------------------------------------------------------------
*/
Route::get('/municipalidades', 'MuniController@all');
Route::get('/municipalidades/{id}', 'MuniController@detail');// va a listar los tramites por muni
/*
|--------------------------------------------------------------------------
| TRAMITES CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/tramites/{id}', 'TramiteController@all');
// Route::get('/tramites/{id}', 'TramiteController@all');
// Route::get('/tramites/{id}', 'TramiteController@find');
Route::get('/tramites-online', 'TramiteController@online');
Route::get('/tramites/agregar-tramite','TramiteController@agregar'); // ->middleware("Auth");

/*
|--------------------------------------------------------------------------
| NOSOTROS CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/nosotros','NosotrosController@nosotros');
/*
|--------------------------------------------------------------------------
| PREGUNTAS FRECUENTES CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/preguntasfrecuentes','PreguntasController@preguntas');
/*
|--------------------------------------------------------------------------
| CAPACITACIONES CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/capacitaciones','CapacitacionesController@capacitaciones');
/*
|--------------------------------------------------------------------------
| CONTACTOS CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/contactos','ContactosController@contactos');
