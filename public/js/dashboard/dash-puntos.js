function setPuntos(id, pais){

    var datos = {
        id_alumno: id,
        pais_name: pais
    }

    $.ajax({
        url: 'puntos/setPunto',
        type: 'get',
        dataType: 'json',
        data: datos
    })
    .done(function(dato){
        //console.log(dato);
        UIkit.notification({
            message: '<i class="fas fa-check-circle"> </i> '+dato.pais,
            status: 'success',
            pos: 'top-center',
            timeout: 1500
        });
    })
    .fail(function(dato){
        alert('Error en el sistemas, comuniquese con el administrador.');
    });

}