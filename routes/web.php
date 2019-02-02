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
Route::get('/Registro/Nuevo/', 'RegistroController@nuevoRegistro')->name('Registro');
Route::get('/Registro/getPaises', 'RegistroController@getPaises');


Route::get('/Registro/Codigo', 'RegistroController@registrarCodigo')->name('Codigo');
Route::post('/Registro/Verificacion', 'RegistroController@verificarCodigo');
Route::get('/Registro/Nuevo/{id}', 'RegistroController@confirmarRegistro');

Route::post('/Registro/Confirmar', 'RegistroController@guardarAlumno')->name('Confirmacion');

Route::get('/Registro/Costos', 'RegistroController@costos')->name('Costos');


/**
 * Rutas de Paises
 */
Route::get('/pais', 'PaisController@index')->name('Pais');
Route::post('/pais/create', 'PaisController@guardar')->name('GuardarPais');


/**
* Rutas de comites
*/
Route::get('/Comites', 'ComiteController@indexComite')->name('infoComites');
Route::get('/Comites/Recursos', 'ComiteController@recursos')->name('RecursosApoyo');
Route::get('/Comites/Criterios', 'ComiteController@criterios')->name('CriterioPremiacion');
Route::get('/Comites/Antecedentes', 'ComiteController@antecedentes')->name('Antecedentes');
Route::get('/Comites/Posiciones', 'ComiteController@posiciones')->name('Posiciones');


/**
 *  Rutas de administrador
 */
Route::get('/Admin', 'AdminController@index')->name('admin.index');

Route::get('/Admin-Comite', 'AdminController@comite')->name('admin.comite');
Route::post('/Admin-Comite/new', 'AdminController@savecomite')->name('save.comite');
Route::get('/Admin-Comite/delete/{id}', 'AdminController@deletecomite')->name('delete.comite');

Route::get('/Admin-Pais', 'AdminController@pais')->name('admin.pais');
Route::post('/Admin-Pais/new', 'AdminController@savepais')->name('save.pais');
Route::get('/Admin-Pais/delete/{id}', 'AdminController@deletepais')->name('delete.pais');
Route::post('/Admin-Pais/Import', 'AdminController@importPaises')->name('ImportarXlsx');


Route::get('/Admin-Escuela', 'AdminController@escuela')->name('admin.escuela');
Route::post('/Admin-Escuela/new', 'AdminController@saveescuela')->name('save.escuela');
Route::get('/Admin-Escuela/delete/{id}', 'AdminController@deleteescuela')->name('delete.escuela');
Route::post('/Admin-Escuela/Pre-registros/new', 'AdminController@preregistroescuela')->name('preregistro.escuela');
Route::post('/Admin-Escuela/Generado', 'AdminController@generarregistro')->name('preregistro.generados');

Route::get('/Admin-PaisComite', 'AdminController@paiscomite')->name('admin.paiscomite');
Route::post('/Admin-PaisComite/new', 'AdminController@savepaiscomite')->name('save.paiscomite');
Route::get('/Admin-PaisComite/delete/{id}', 'AdminController@deletepaiscomite')->name('delete.paiscomite');
