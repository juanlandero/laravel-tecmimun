/**
 * @author Juan Carlos Landero
 */

function dismissModal(id_modal){
    $(id_modal).removeClass('is-active');   
    $('#comite-detail').bootstrapTable('destroy');
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
            $('.comite_nombre').html(dato.comite)
            $('#comite-detail').bootstrapTable({
                data: dato.paises,
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
                    field: 'bandera',
                    title: 'BANDERA'
                  }, {
                    field: 'escuela',
                    title: 'ESCUELA'
                  }, ]
            });
        
            $('#alumnos').addClass('is-active');        
        }
          
    })
    .fail(function(dato){
        console.log("fail");
    });
}

function modalAddPaises(id_comite, pk_idioma){
    var data = {
        comite: id_comite,
        idioma: pk_idioma
    }
    $.ajax({
        url: '/admin/paisComite',
        type: 'GET',
        dataType: 'json',
        data: data
    })
    .done(function(dato){
        console.log("success");

        if (dato.pais != null) {
            
            var check = "";

            dato.pais.forEach(element => {
                check += '<div class="column is-3"><label class="checkbox"><input type="checkbox" value="'+element.id+'" name="paises[]"> '+element.nombre+'</label></div>';
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

function toggle(source) {
    checkboxes = document.getElementsByName('paises[]');
  
    for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = source.checked;
    }
}