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
        if (dato.return != false) {
            $('#alumnos').bootstrapTable({
                columns: dato.columna,
                data: dato.dato
            });
        }
        div_instru.remove();
        div_buscar.removeClass('is-loading');
    })
    .fail(function(dato){
        //console.log(dato);
        div_buscar.removeClass('is-loading');
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
});
    
