/**
 * @author Juan Carlos Landero
 */

function dismissModal(id_modal){
    $(id_modal).removeClass('is-active');   
    $('#modal-datail').bootstrapTable('destroy');
    $('#delete_comite').val(0);
};

function modalRegistros(comite){
    $.ajax({
        url: 'comite/details',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+comite
    })
    .done(function(dato){
        console.log("success");
 
        if (dato.resultado == true) {
            $('#bodyt').html('<td colspan="6" class="has-text-centered subtitle is-5">'+dato.texto+'</td>');
            $('#alumnos').addClass('is-active'); 
        }else{
            $('#modal-datail').bootstrapTable({
                data: dato,
                pagination: true,
                search: true,
                columns: [{
                    field: 'id',
                    title: 'ID',
                  }, {
                    field: 'alumno',
                    title: 'NOMBRE'
                  }, {
                    field: 'codigo',
                    title: 'CÓDIGO',
                    align: 'center'
                  }, {
                    field: 'pais',
                    title: 'PAÍS'
                  }, {
                    field: 'escuela',
                    title: 'ESCUELA'
                  }, {
                    field: 'comite',
                    title: 'COMITÉ'
                  }, ]
            });
        
            $('#alumnos').addClass('is-active');        
        }
          
    })
    .fail(function(dato){
        console.log("fail");
    });
}

function modalAddPaises(comite){
    $.ajax({
        url: '/admin/paisComite',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+comite
    })
    .done(function(dato){
        console.log("success");

        if (dato.pais != null) {
            
            var check = "";

            dato.pais.forEach(element => {
                check += '<div class="column is-2"><label class="checkbox"><input type="checkbox" value="'+element.id+'" name="paises[]"> '+element.nombre+'</label></div>';
            });
            $('#comite').val(dato.comite);
            $('#paises').html(check);
            $('#btn_enviar').attr('disabled', false);

        }else{
            $('#btn_enviar').attr('disabled', true);
            $('#paises').html('<div class="column has-text-centered"><span>No hay países disponibles</span></div>');
        }     
        $('#delete_comite').val(dato.comite);
        $('#addPaises').addClass('is-active');
    })
    .fail(function(dato){
        console.log("fail");
    });
}

function deleteComite(id){
    $.ajax({
        url: 'comite/delete',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+id
    })
    .done(function(dato){
        if (dato.return) {
            $('#'+id).remove();
        }else{
            alert(dato.text);
        }
    })
    .fail(function(){
        console.log("Fallo en el sistem.");
    });
}

$('form#delete_paises').submit(function(e){
    e.preventDefault();
    var data = $(this).serializeArray();
    $.ajax({
        url: '/admin/paisComite/delete',
        type: 'GET',
        dataType: 'json',
        data: data
    })
    .done(function(dato){
        if (dato.return) {
            location.reload();      
        }else{
            alert(dato.text);
        }
    })
    .fail(function(dato){
        console.log(dato);
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
});