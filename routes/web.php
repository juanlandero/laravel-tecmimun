<?php


Route::get('/', function () {
    return view('welcome');
})->name('index');



/**
 * Acerca de nosotros
 */
Route::get('/AcercaDe', 'NosotrosController@index')->name('Nosotros');





/**
 * Registro de alumnos
 */
Route::get('/Registro', 'RegistroController@index')->name('Registro');


/**
 * Rutas de Paises
 */

Route::get('/pais', 'PaisController@index')->name('Pais');
Route::post('/pais/create', 'PaisController@guardar')->name('GuardarPais');



/**
* Rutas de comites
*/

Route::get('/comites', 'ComiteController@index')->name('comite');
Route::post('/comites', 'ComiteController@guardar')->name('guardarcomites');