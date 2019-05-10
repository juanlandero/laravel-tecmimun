$('form#clave').submit(function(e){
	e.preventDefault();
	var data = $(this).serializeArray();
	$.ajax({
		url: 'verificacion',
		type: 'get',
		dataType: 'json',
		data: data
	})
	.done(function(dato){
		if (dato.resultado) {
			window.location ='../comites';
		}else{
			alert(dato.text)
		}
	})
	.fail(function(dato){
		console.log(dato);
		alert('Error en el sistemas, comuniquese con el administrador.');
	});
});