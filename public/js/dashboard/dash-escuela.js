function dismissModal(id_modal){
    $(id_modal).removeClass('is-active');   
};

function launchModal(id_modal, id_escuela){
    $(id_modal).addClass('is-active');
    $('#id_escuela').val(id_escuela);
}

function modalRegistros(comite){
    $.ajax({
        url: '/admin/escuela/details',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+comite
    })
    .done(function(dato){
        console.log("success");

        if (dato.resultado == false) {
            $('#bodyt').html('<td colspan="6" class="has-text-centered subtitle is-5">'+dato.texto+'</td>');
            $('#alumnos').addClass('is-active'); 
        }else{
            $('#escuela-detail').bootstrapTable({
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

$('#id_comite').change(function(){

    var id_comite = $('#id_comite').val();

    $.ajax({
        url: '/admin/escuela/getPaises',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+id_comite
    })
    .done(function(dato){

        console.log("success");

        if (dato.estado == true) {
            var check = ""
            
            dato.pais.forEach(element => {
                check += '<div class="column is-4"><label class="checkbox"><input type="checkbox" value="'+element.id+'" name="paiscomite[]"> '+element.pais+'</label></div>';
            });
        
            $('#paises').html(check);
            $('#generar').attr("disabled", false);
        }else{
            $('#paises').html("No existen países disponibles.");
            $('#generar').attr("disabled", true);
        }                
    })
    .fail(function(dato){
        console.log("Error en el sistema.");
    });
});

function deleteEscuela(id){
    $.ajax({
        url: 'escuela/delete',
        type: 'GET',
        dataType: 'json',
        data: 'escuela='+id
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

function sendEmail(mail, id){

    var btn_id = $('#'+id);

    btn_id.addClass('is-loading');

    $.ajax({
        url: 'escuela/sendMail',
        type: 'GET',
        dataType: 'json',
        data: 'mail='+mail
    })
    .done(function(dato){
        btn_id.removeClass('is-loading');

        if (dato.return) {
            $('#'+id).remove();
        }else{
            alert(dato.text);
        }
    })
    .fail(function(){
        btn_id.removeClass('is-loading');
        console.log("Fallo en el sistem.");
    });
}