$('form#nuevaLista').submit(function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
        url: 'lista/new',
        type: 'POST',
        dataType: 'json',
        data: datos
    })
    .done(function(dato){
        console.log(dato);
        window.location.reload();
    })
    .fail(function(dato){
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
});

function dismissModal(id_modal){
    $(id_modal).removeClass('is-active');   
};
  
    
function modalLista(id){
    $.ajax({
      url: 'lista/modal',
      type: 'GET',
      dataType: 'json',
      data: 'lista='+id
  })
  .done(function(dato){
      if (dato.resultado) {
          alert(dato.texto);
      }else{
          $('#lista').html(dato.paises);
          $('#modal_lista').addClass('is-active');
      }
  })
  .fail(function(dato){
      //console.log(dato);
      alert('Error en el sistemas, comuniquese con el administrador.');
  });
}
  

function estadoAlumno(id, estado, lista){
  
    var datos = {
        delegacion: id,
        lista: lista,
        estado: estado
    };

    $.ajax({
        url: 'lista/asistencia',
        type: 'GET',
        dataType: 'json',
        data: datos
    })
    .done(function(dato){
        console.log(dato.asistencia);
        
        var delegacion = $('#'+dato.delegacion);

        if(delegacion.hasClass('presente')){
            delegacion.removeClass('presente');
        }
        if(delegacion.hasClass('ausente')){
            delegacion.removeClass('ausente');
        }

        if (dato.asistencia) {
            delegacion.addClass('presente');
        }else{
            delegacion.addClass('ausente');
        }
    })
    .fail(function(dato){
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
}