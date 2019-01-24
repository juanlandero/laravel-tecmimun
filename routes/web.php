<?php


Route::get('/', function () {
    return view('welcome');
})->name('index');



/**
 * Acerca de nosotros
 */
Route::get('/AcercaDe', 'NosotrosController@index')->name('Nosotros');
Route::get('/AcercaDe/Protocolo', 'ComiteController@recursos')->name('Protocolo');
Route::get('/AcercaDe/Contacto', 'NosotrosController@contacto')->name('Contacto');



/**
 * Registro de alumnos
 */
Route::get('/Registro', 'RegistroController@comoRegistrarme')->name('ComoRegistrarse');
Route::get('/Registro/Nuevo', 'RegistroController@index')->name('Registro');
Route::get('/Registro/Costos', 'RegistroController@costos')->name('Costos');


/**
 * Rutas de Paises
 */
Route::get('/pais', 'PaisController@index')->name('Pais');
Route::post('/pais/create', 'PaisController@guardar')->name('GuardarPais');



/**
* Rutas de comites
*/

//Route::get('/comites', 'ComiteController@index')->name('comite');
//Route::post('/comites', 'ComiteController@guardar')->name('guardarcomites');
Route::get('/Comites', 'ComiteController@indexComite')->name('infoComites');
Route::get('/Comites/Recursos', 'ComiteController@recursos')->name('RecursosApoyo');
Route::get('/Comites/Criterios', 'ComiteController@criterios')->name('CriterioPremiacion');
Route::get('/Comites/Antecedentes', 'ComiteController@antecedentes')->name('Antecedentes');
Route::get('/Comites/Posiciones', 'ComiteController@posiciones')->name('Posiciones');