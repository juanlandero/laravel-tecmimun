@extends('admin.plantilla')

@section('body')

@section('seccion', 'Comite')

<div class="columns is-centered">
    <div class="column is-9">
        <div class="columns is-multiline">
            @foreach ($comites as $comite)
                <div class="column is-4">
                    <div class="notification is-info"  style="height: 240px">
                        <a href="{{ route('delete.comite', ['id' => $comite['id']]) }}" class="delete" aria-label="delete"></a>
                        <p style="margin-bottom: 10px"><strong>{{ $comite['nombre'] }}</strong></p>
                        <p>Idioma: {{$comite['idioma'] }}</p>
                        <p>Usuario: {{$comite['mail'] }}</p>
                        <p>Países: {{ $comite['paises'] }}</p>

                        <div class="columns has-text-centered is-mobile" style="position: absolute; bottom: 20px;">
                            <div class="column">
                                <a onclick="modalRegistros({{ $comite['id'] }})" class="button is-danger is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-th-list"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="{{ route('excel', ['comite' => $comite['id']]) }}" class="button is-danger is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-file-excel"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a onclick="modalAddPaises({{ $comite['id'] }})" class="button is-danger is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-flag"></i>
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
            <p class="panel-heading">Crear Comité</p>
            <div class="panel-block">
                <form action="{{ route('save.comite') }}" method="post">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-primary" name="nombre_comite" type="text" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="select is-multiple">
                            <select multiple size="3" name="idioma" required>
                                <option value="Español">Español</option>
                                <option value="Inglés">Inglés</option>
                                <option value="Francés">Francés</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="button is-rounded is-danger">Enviar</button>
                </form>
            </div>                  
        </nav>
    </div>


@include('admin.modal.inscritos')
@include('admin.modal.addPaises')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>

function dismissModal(id_modal){
    $(id_modal).removeClass('is-active');   
};

function modalRegistros(comite){
    $.ajax({
        url: '/Admin-Comite/details',
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
                cell = "<tr><td>"+element.id+"</td><td>"+alumno+"</td><td>"+codigo+"</td><td>"+element.pais+"</td><td>"+escuela+"</td><td>"+element.comite+"</td></tr>"
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

function modalAddPaises(comite){
    $.ajax({
        url: '/Admin-PaisComite',
        type: 'GET',
        dataType: 'json',
        data: 'comite='+comite
    })
    .done(function(dato){
        console.log("success");
        console.log(dato);

        var check = ""

        dato.pais.forEach(element => {
             check += '<div class="column is-2"><label class="checkbox"><input type="checkbox" value="'+element.id+'" name="paises[]"> '+element.nombre+'</label></div>';
        });
        $('#comite').val(dato.comite)
        $('#delete_comite').val(dato.comite)
        $('#paises').html(check);
        $('#addPaises').addClass('is-active');       
    })
    .fail(function(dato){
        console.log("fail");
    });
}

</script>
@endsection