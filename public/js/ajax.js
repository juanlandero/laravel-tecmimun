/**
 * @author Juan Carlos Landero
 */
$(document).ready(function(){
	
	$('form#codigo').submit(function(e){
		e.preventDefault();
		var data = $(this).serializeArray();
		$.ajax({
			url: '/Registro/Verificacion',
			type: 'POST',
			dataType: 'json',
			data: data
		})
		.done(function(dato){
            if (dato.resultado) {
                $('#result').html(dato.texto);
                window.location= dato.texto;
            }else{
				$('#result').html(dato.texto);
				$('#msn').css('display', 'block');
            }
		})
		.fail(function(dato){
            console.log(dato);
			alert('Error en el sistemas, comuniquese con el administrador.');
		});
	});
});