/**
 * @author Juan Carlos Landero
 */
$(document).ready(function(){
	
	$('form#codigo').submit(function(e){
		e.preventDefault();
		var data = $(this).serializeArray();
		$.ajax({
			url: '/registro/verificacion',
			type: 'POST',
			dataType: 'json',
			data: data
		})
		.done(function(dato){
            if (dato.resultado) {
                window.location= dato.texto;
            }else{
				UIkit.notification({
                    message: dato.texto,
                    status: 'danger',
                    pos: 'top-center',
                    timeout: 3000
                });
            }
		})
		.fail(function(dato){
            console.log(dato);
			alert('Error en el sistemas, comuniquese con el administrador.');
		});
	});
});