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
 **/


Route::group(['middleware' => ['admin'],
                'prefix' => 'admin'], function () {
   
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::get('/pais', 'AdminController@pais')->name('admin.pais');
    Route::post('/pais/new', 'AdminController@newPais');
    Route::get('/pais/delete', 'AdminController@deletePais')->name('delete.pais');
    Route::post('/pais/import', 'AdminController@importPaises')->name('ImportarXlsx');
    Route::get('pais/get', 'AdminController@getPais');

    Route::get('/comite', 'AdminController@comite')->name('admin.comite');
    Route::get('/comite/details', 'AdminController@detailcomite');
    Route::get('/comite/download', 'AdminController@getExcel')->name('excel');
    Route::post('/comite/new', 'AdminController@savecomite')->name('save.comite');
    Route::get('/comite/delete', 'AdminController@deletecomite')->name('delete.comite');


    Route::get('/escuela', 'AdminController@escuela')->name('admin.escuela');
    Route::post('/escuela/new', 'AdminController@saveescuela')->name('save.escuela');
    Route::get('/escuela/delete', 'AdminController@deleteescuela');
    Route::get('/escuela/details', 'AdminController@registrosescuela');
    Route::get('/escuela/getPaises', 'AdminController@getpaises')->name('getpaises.escuela');
    Route::post('/escuela/Generado', 'AdminController@generarregistro')->name('codigos.escuela');
    Route::get('/Admin-Escuela/download', 'AdminController@getExcelEscuelas')->name('excelAlumnos');


    Route::get('/paisComite', 'AdminController@paiscomite');
    Route::post('/paisComite/new', 'AdminController@savepaiscomite')->name('save.paiscomite');
    Route::get('/paisComite/delete', 'AdminController@deletepaiscomite');
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

Route::get('mail', function () {
    return new App\Mail\Responsable();
});