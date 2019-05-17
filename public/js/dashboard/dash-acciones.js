/**
 * @author Juan Carlos Landero
 */
$('#select_accion').change(function () {
    var accion = $('#select_accion').val()

    $.ajax({
        url: 'acciones/selectOne',
        type: 'GET',
        dataType: 'json',
        data: 'accion='+accion
    })
    .done(function(dato){
        $('#option_accion').html(dato.option)
    })
    .fail(function(){
        console.log("Fallo en la selección de la acción")
    });
});


$('form#mostrar_tabla').submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();

    $('#tabla-acciones').bootstrapTable('destroy');
    $('.nombre').html("")

    $.ajax({
        url: 'acciones/tablaAcciones',
        type: 'POST',
        dataType: 'json',
        data: data
    })
    .done(function(dato){

        $('.nombre').html(dato.nombre)
        $('#tabla-acciones').bootstrapTable({
            data: dato.paises,
            pagination: false,
            search: true,
            columns: dato.columnas
        });  
    })
    .fail(function(dato){
        console.log(dato);
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
});

function nuevoCodigo(id){
    $.ajax({
        url: 'acciones/nuevo-codigo',
        type: 'GET',
        dataType: 'json',
        data: 'id_alumno='+id
    })
    .done(function(dato){
        alert("Se ha generado un nuevo código: "+dato.codigo)

        $('#'+dato.id_codigo).html(dato.codigo);
    })
    .fail(function(){
        console.log("Error al modificar le código.");
    });
}