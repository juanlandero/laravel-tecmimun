<?php
Route::get('/', function () {
    return view('index');
})->name('index');


Route::group([ 'prefix' => 'acerca-de' ], function () {
    Route::get('/', 'NosotrosController@nosotros')->name('modulo.nosotros');
    Route::get('/protocolo', 'ComiteController@recursos')->name('modulo.protocolo');
    Route::get('/contacto', 'NosotrosController@contacto')->name('modulo.contacto');
});

Route::group([ 'prefix' => 'registro' ], function () {

    Route::get('/', 'RegistroController@registro')->name('modulo.registro');
    Route::get('/completo', 'RegistroController@completo')->name('modulo.completo');
    Route::get('/getPaises', 'RegistroController@getPaises');
    
    
    Route::get('/codigo', 'RegistroController@registrarCodigo')->name('modulo.codigo');
    Route::post('/verificacion', 'RegistroController@verificarCodigo');
    Route::get('/nuevo/{id}', 'RegistroController@confirmarRegistro');

    Route::post('/confirmar', 'RegistroController@guardarAlumno')->name('Confirmacion');
    
    Route::get('/costos', 'RegistroController@costos')->name('modulo.costos');
});


Route::group([ 'prefix' => 'comites' ], function () {
    
    Route::get('/', 'ComiteController@index')->name('index.comites');
    Route::get('/criterios', 'ComiteController@premiacion')->name('modulo.premiacion');
    Route::get('/antecedentes', 'ComiteController@antecedentes')->name('modulo.antecedentes');
    Route::get('/posiciones-oficiales', 'ComiteController@posiciones')->name('modulo.posiciones-oficiales');
    Route::get('/recursos', 'ComiteController@recursos')->name('modulo.recursos-apoyo');
});

Route::group([  'middleware' => ['admin'],
                'prefix' => 'admin' ], function () {
   
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::post('/busqueda', 'AdminController@busqueda');

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
    Route::get('/escuela/download', 'AdminController@getExcelEscuelas')->name('excelAlumnos');
    Route::get('/escuela/sendMail', 'AdminController@sendEmail');


    Route::get('/paisComite', 'AdminController@paiscomite');
    Route::post('/paisComite/new', 'AdminController@savepaiscomite')->name('save.paiscomite');
    Route::get('/paisComite/delete', 'AdminController@deletepaiscomite');

    Route::get('/setComite', 'AdminController@setSession');
});

Route::group([  'middleware' => ['comite'],
                'prefix' => 'mesa' ], function () {
   
    Route::get('/', 'DashboardController@index')->name('mesa.index');

    Route::get('/bienvenida', 'DashboardController@welcome')->name('mesa.bienvenida');
    Route::post('/bienvenida/Check', 'DashboardController@checkIn');   
    Route::get('/lista', 'DashboardController@lista')->name('mesa.lista');
    Route::post('/lista/new', 'DashboardController@newLista');
    Route::get('/lista/modal', 'DashboardController@getModalLista');
    Route::get('/lista/asistencia', 'DashboardController@estadoEnLista');
    Route::get('/puntos', 'DashboardController@puntos')->name('mesa.puntos');
    Route::get('/puntos/setPunto', 'DashboardController@setPuntos');
    Route::get('/puntos/amonestaciones', 'DashboardController@amonestaciones');
    Route::get('/posiciones', 'DashboardController@posiciones')->name('mesa.posiciones');
    Route::get('/posiciones/tabla', 'DashboardController@posicionesTabla');
    Route::get('/detalle', 'DashboardController@detalle')->name('mesa.detalle');
    Route::get('/getInfo', 'DashboardController@getInfo');
});

Route::group([  'middleware' => ['responsable'] ], function () {
    
    Route::get('/tutorAdmin', 'ResponsableController@index')->name('responsable.view');
    Route::get('/tutor/download', 'ResponsableController@getExcelEscuelas')->name('excelEscuelas');

});


Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//Ruta temporal
Route::get('mail', function () {
    return new App\Mail\Responsable();
});

Route::get('/prueba', function(){
    return view('prueba');
});