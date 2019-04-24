/**
 * @author Juan Carlos Landero
 */

 $(document).ready(function(){

    $('#tabla-paises').bootstrapTable({
        url: 'pais/get',
        pagination: true,
        search: true,
        columns: [{
            field: 'id',
            title: 'ID',
          }, {
            field: 'nombre',
            title: 'NOMBRE'
          }, {
            field: 'idioma',
            title: 'IDIOMA'
          }, {
            field: 'eliminar',
            title: 'ELIMINAR',
            align: 'center'
          }, ]
    });

    var file = document.getElementById("file");
    file.onchange = function(){
        if(file.files.length > 0){
            document.getElementById('filename').innerHTML = file.files[0].name;
        }
    };


	$('form#nuevo-pais').submit(function(e){
		e.preventDefault();
		var data = $(this).serializeArray();
		$.ajax({
			url: 'pais/new',
			type: 'POST',
			dataType: 'json',
			data: data
		})
		.done(function(dato){
            $('#pais').val("");

            $('#tabla-paises').bootstrapTable('refresh', {
                url: 'pais/get'
            });
		})
		.fail(function(dato){
            console.log(dato);
			alert('Error en el sistemas, comuniquese con el administrador.');
		});
    });
    
});


function deletePais(id){
    $.ajax({
        url: 'pais/delete',
        type: 'GET',
        dataType: 'json',
        data: 'id_pais='+id
    })
    .done(function(dato){
        if (dato.return) {
            $('#tabla-paises').bootstrapTable('refresh', {
                url: 'pais/get'
            });
        }else{
            alert(dato.text);
            console.log(dato.text);
        }
    })
    .fail(function(dato){
        //console.log(dato);
        alert('Error en el sistemas, comuniquese con el administrador.');
    });
}