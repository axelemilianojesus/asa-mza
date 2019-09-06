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

Route::get('/', "HomeController@home");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', 'RegisterController@create');
// Route::post('/register', 'RegisterController@create');
Route::get('/working','HomeController@working');
route::get('/admin','HomeController@admin');
/*
|--------------------------------------------------------------------------
| USER CONTROLLER
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| MUNI CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/municipalidades', 'MuniController@all');
/*
|--------------------------------------------------------------------------
| CURSO CONTROLLER
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
|TRAMITES CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/tramites/{id}', 'TramiteController@all');
Route::get('/tramites-online', 'TramiteController@online');

/*
|--------------------------------------------------------------------------
| NOSOTROS CONTROLLER
|--------------------------------------------------------------------------
*/
Route::get('/nosotros','NosotrosController@nosotros');
/*
|--------------------------------------------------------------------------
| PREGUNTAS FRECUENTES
|--------------------------------------------------------------------------
*/
Route::get('/preguntasfrecuentes','PreguntasController@preguntas');
