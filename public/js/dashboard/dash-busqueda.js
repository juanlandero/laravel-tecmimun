/**
 * @author Juan Carlos Landero
 */

$('form#buscar').submit(function(e){
    e.preventDefault();
    
    var div_buscar = $('#div_buscar');
    var busqueda = $(this).serializeArray();
    var div_instru = $('#instrucciones');
    
    div_buscar.addClass('is-loading');
    $('#alumnos').bootstrapTable('destroy');

    $.ajax({
        url: 'admin/busqueda',
        type: 'POST',
        dataType: 'json',
        data: busqueda
    })
    .done(function(dato){

        $('#alumnos').bootstrapTable({
            undefinedText: 'N/A',
            columns: dato.columna,
            data: dato.dato
        });

        console.log(dato);
        div_instru.remove();
        div_buscar.removeClass('is-loading');
    })
    .fail(function(dato){
        //console.log(dato);
        div_buscar.removeClass('is-loading');
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
});
    

function sendMailAdmin(correo, codigo, id){

    var btn_id = $(id)
    btn_id.addClass('is-loading')

    var busqueda = {
        email: correo,
        codigo: codigo,
        isAdmin: 1
    }

    $.ajax({
        url: 'registro/email/',
        type: 'GET',
        dataType: 'json',
        data: busqueda
    })
    .done(function(dato){
        UIkit.notification({
            message: dato.texto,
            status: dato.status,
            pos: 'top-center',
            timeout: 1500
        });

        btn_id.removeClass('is-loading');
    })
    .fail(function(dato){
        btn_id.removeClass('is-loading');
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
}
