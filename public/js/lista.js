$('form#nuevaLista').submit(function(e){
    e.preventDefault();

    var datos = $(this).serializeArray();

    $.ajax({
        url: '/getLista/new',
        type: 'POST',
        dataType: 'json',
        data: datos
    })
    .done(function(dato){
        console.log(dato);
        paseLista();
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
      url: '/getLista/modal',
      type: 'GET',
      dataType: 'json',
      data: 'lista='+id
  })
  .done(function(dato){
      //console.log(dato);
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
        url: '/getLista/checkAlumno',
        type: 'GET',
        dataType: 'json',
        data: datos
    })
    .done(function(dato){
        console.log(dato.asistencia);
        if (dato.asistencia == "Presente") {
            $('#'+dato.delegacion).addClass('presente');
        }else{
            $('#'+dato.delegacion).addClass('ausente');
        }
    })
    .fail(function(dato){
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
}