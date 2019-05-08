$(document).ready(function(){
    $('select#comite').change(function(){
        var data = $('#comite').val();
		$.ajax({
			url: '/registro/getPaises',
			type: 'GET',
			dataType: 'json',
			data: 'comite='+data
		})
		.done(function(dato){
            var option = "<option value='0'>Selecciona tu Pais</option>";
            var e = "";
            for (let index = 0; index < dato.length; index++) {
                element = dato[index];
                e = "<option value='"+element.id+"'>"+element.pais+"</option>"
                option = option + e;
            }

            $('#pais').html(option);                      
		})
		.fail(function(dato){
			alert('Error en el sistema.');
		});
	});
});