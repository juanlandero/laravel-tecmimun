@extends('admin.plantilla')

@section('body')

@section('seccion', 'Escuela')

<div class="columns is-centered">
    <div class="column is-9">
        <div class="columns is-multiline">
            @foreach ($data as $escuela)
                <div class="column is-6">
                    <div class="notification is-info"  style="height: 240px">
                        <a href="{{ route('delete.escuela', ['id'=>$escuela->id]) }}" class="delete" aria-label="delete"></a>
                        <p style="margin-bottom: 10px">{{ $escuela->nombre }}</p>
                        <p>Responsable: {{ $escuela->responsable }}</p>
                        <p>E-mail: {{ $escuela->email }}</p>
                        <p>Contraseña: {{ $escuela->password }}</p>
                        
                        <div class="columns is-centered is-mobile" style="position: absolute; bottom: 15px;">
                            <div class="column">
                                <a onclick="modalRegistros({{ $escuela->id }})" class="button is-danger is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-th-list"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a onclick="launchModal('#modalCodigo', {{ $escuela->id }})" class="button is-danger is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-qrcode"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="{{ route('excelAlumnos', ['escuela' => $escuela->id]) }}" class="button is-danger is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-file-excel"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    
                    </div>
                </div>
            @endforeach
        </div>        
    </div>
    
    <div class="column is-3">
        <nav class="panel">
            <p class="panel-heading">Crear Escuela</p>
            <div class="panel-block">
                <form action="{{ route('save.escuela') }}" method="post">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-primary" name="nombre_escuela" type="text" placeholder="Escuela" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input is-primary" name="nombre_responsable" type="text" placeholder="Responsable" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input is-primary" name="mail" type="email" placeholder="e-mail" required>
                        </div>
                    </div>
                 
                    <button type="submit" class="button is-rounded is-danger">Enviar</button>
                </form>
            </div>                  
        </nav>
    </div>
</div>

@include('admin.modal.registrosEscuela')
@include('admin.modal.codigo')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>

function dismissModal(id_modal){
    $(id_modal).removeClass('is-active');   
};

function launchModal(id_modal, id_escuela){
    $(id_modal).addClass('is-active');
    $('#id_escuela').val(id_escuela);
}

function modalRegistros(comite){
    $.ajax({
        url: '/Admin-Escuela/details',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+comite
    })
    .done(function(dato){
        console.log("success");
        var row = "";
        var cel = "";
        var alumno = "";
        var codigo = "";
        var escuela = "";
        if (dato.resultado == true) {
            $('#bodyt').html('<td colspan="6" class="has-text-centered subtitle is-5">'+dato.texto+'</td>');
            $('#alumnos').addClass('is-active'); 
        }else{
            for (let index = 0; index < dato.length; index++) {
                element = dato[index];
                if (element.escuela == null) {
                    alumno = "";
                    codigo = "";
                    escuela = "";
                }else{
                    alumno = element.alumno;
                    codigo = element.codigo;
                    escuela = element.escuela
                }
                cell = "<tr><td>"+element.id+"</td><td>"+alumno+"</td><td>"+codigo+"</td><td>"+element.pais+"</td><td>"+element.comite+"</td><td>"+escuela+"</td></tr>"
                row = row + cell;
            }
            $('#bodyt').html(row);
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
        url: '/Admin-Escuela/getPaises',
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
        console.log("fail");
    });
});
</script>
@endsection