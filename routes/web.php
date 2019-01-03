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
    return view('welcome');
});

Route::get('/registro', 'RegistroController@registro')->name('Registrame');


/**
 * Rutas de Paises
 */

Route::get('/pais', 'PaisController@index')->name('IndexPais');
Route::post('/pais', 'PaisController@guardar')->name('GuardarPais');


/**
* Rutas de comites
*/

Route::get('/comites', 'ComiteController@index')->name('comite');
Route::post('/comites', 'ComiteController@guardar')->name('guardarcomites');