@extends('admin.plantilla')

@section('body')

@section('seccion', 'País')

<div class="columns is-centered">
    <div class="column is-8">

        <nav class="panel">
            <p class="panel-heading">Países</p>
            <div class="panel-block">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CREADO</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $pais)
                            <tr>
                                <td>{{ $pais->id }}</td>
                                <td>{{ $pais->nombre }}</td>
                                <td>{{ $pais->created_at }}</td>
                                <td><a href="{{ route('delete.pais', ['id'=>$pais->id]) }}"><i class="fas fa-trash"></i></a></td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </nav>
    </div>

    <div class="column is-4 ">
        <nav class="panel">
            <p class="panel-heading">Crear País</p>
            <div class="panel-block">
                <form action="{{ route('save.pais') }}" method="post">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-primary" name="nombre_pais" type="text" placeholder="Nombre">
                        </div>
                    </div>
                    <button type="submit" class="button is-rounded is-danger">Enviar</button>
                </form>
            </div>                  
        </nav>
        <nav class="panel">
                <p class="panel-heading">Importar un xlsx</p>
                <div class="panel-block">
                    <form action="{{ route('ImportarXlsx') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      
                        <div class="file has-name is-boxed">
                            <label class="file-label">
                                <input class="file-input" type="file" name="archivo_xlsx" id="file">
                                <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Examinar
                                </span>
                                </span>
                                <span class="file-name" id="filename">
                                </span>
                            </label>
                        </div>
                        <button class="button is-danger is-rounded" type="submit">Cargar</button>
                    </form>
                </div>                  
            </nav>
    </div>
</div>

<script>
var file = document.getElementById("file");
file.onchange = function(){
    if(file.files.length > 0)
    {

      document.getElementById('filename').innerHTML = 					file.files[0].name;

    }
};

</script>
@endsection