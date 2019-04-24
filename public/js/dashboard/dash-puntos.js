function setAccion(id, pais){

    var accion_radio = 0;
    var i;
    
    var porNombre=document.getElementsByName("accion");

    for(var i=0;i<porNombre.length;i++)
    {
        if(porNombre[i].checked)
            accion_radio = porNombre[i].value;
    }
    
    if (accion_radio == 0) {
        alert("Debe seleccionar una acción")
    }else{
        var datos = {
            id_alumno: id,
            pais_name: pais,
            accion: accion_radio
        }

        $.ajax({
            url: 'puntos/setPunto',
            type: 'get',
            dataType: 'json',
            data: datos
        })
        .done(function(dato){
            UIkit.notification({
                message: dato.mensaje,
                status: dato.status,
                pos: 'top-center',
                timeout: 1500
            });
        })
        .fail(function(dato){
            alert('Error en el sistemas, comuniquese con el administrador.');
        });
    }
}


function toggleModal(id){
    var elemento = $('#'+id);

    if (elemento.hasClass('is-active')) {
        $('#'+id).removeClass('is-active')
        $('#tabla-amonestaciones').bootstrapTable('destroy');
    }else{
        $('#'+id).addClass('is-active')
    }
}

$('#ver_amonestaciones').click(function(){
  
        $('#tabla-amonestaciones').bootstrapTable({
            url: 'puntos/amonestaciones',
            pagination: true,
            search: true,
            columns: [{
                field: 'pais',
                title: 'PAÍS',
              }, {
                field: 'verbal',
                title: 'A. VERBALES'
              }, {
                field: 'escritas',
                title: 'A. ESCRITAS',
                align: 'center'
              },]
        });
        $('#modal_amonestaciones').addClass('is-active');
  
});