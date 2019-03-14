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
Route::group(['middleware' => ['admin']], function () {
   
    Route::get('/Admin', 'AdminController@index')->name('admin.index');

    Route::get('/Admin-Comite', 'AdminController@comite')->name('admin.comite');
    Route::get('/Admin-Comite/details', 'AdminController@detailcomite');
    Route::get('/Admin-Comite/download', 'AdminController@getExcel')->name('excel');
    Route::post('/Admin-Comite/new', 'AdminController@savecomite')->name('save.comite');
    Route::get('/Admin-Comite/delete/{id}', 'AdminController@deletecomite')->name('delete.comite');

    Route::get('/Admin-PaisComite', 'AdminController@paiscomite')->name('admin.paiscomite');
    Route::post('/Admin-PaisComite/new', 'AdminController@savepaiscomite')->name('save.paiscomite');
    Route::get('/Admin-PaisComite/delete', 'AdminController@deletepaiscomite')->name('delete.paiscomite');


    Route::get('/Admin-Pais', 'AdminController@pais')->name('admin.pais');
    Route::post('/Admin-Pais/new', 'AdminController@savepais')->name('save.pais');
    Route::get('/Admin-Pais/delete/{id}', 'AdminController@deletepais')->name('delete.pais');
    Route::post('/Admin-Pais/Import', 'AdminController@importPaises')->name('ImportarXlsx');


    Route::get('/Admin-Escuela', 'AdminController@escuela')->name('admin.escuela');
    Route::post('/Admin-Escuela/new', 'AdminController@saveescuela')->name('save.escuela');
    Route::get('/Admin-Escuela/delete/{id}', 'AdminController@deleteescuela')->name('delete.escuela');
    Route::get('/Admin-Escuela/details', 'AdminController@registrosescuela')->name('registros.escuela');
    Route::get('/Admin-Escuela/getPaises', 'AdminController@getpaises')->name('getpaises.escuela');
    Route::post('/Admin-Escuela/Generado', 'AdminController@generarregistro')->name('codigos.escuela');
    Route::get('/Admin-Escuela/download', 'AdminController@getExcelEscuelas')->name('excelAlumnos');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['comite']], function () {
   
    Route::get('/delegate', 'DashboardController@index')->name('dashboard.index');
    Route::get('/delegate/welcome', 'DashboardController@welcome')->name('dashboard.welcome');
    Route::post('/delegate/Check', 'DashboardController@checkIn')->name('dashboard.checkin');
    Route::get('/getLista', 'DashboardController@getPaseLista');
    Route::post('/getLista/new', 'DashboardController@newLista')->name('newLista');
    Route::get('/getLista/modal', 'DashboardController@getModalLista')->name('modalLista');
    Route::get('/getLista/checkAlumno', 'DashboardController@estadoEnLista')->name('checkAlumno');
    Route::get('/getPuntos', 'DashboardController@getPuntos');
    Route::get('/getPuntos/setPunto', 'DashboardController@setPuntos');
    Route::get('/getInfo', 'DashboardController@getInfo');

});


Route::group(['middleware' => ['responsable']], function () {
    Route::get('/ResponsableAdmin', 'ResponsableController@index')->name('responsable.view');
    Route::get('/ResponsableAdmin/download', 'ResponsableController@getExcelEscuelas')->name('excelEscuelas');

});