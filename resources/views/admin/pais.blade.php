@extends('admin.plantilla')

@section('body')

@section('seccion', 'País')

<div class="columns is-centered">
    <div class="column is-9">

        <nav class="panel">
            <p class="panel-heading">Países</p>
            <div class="panel-block">
                <table class="table is-fullwidth">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CREADO</th>
                            <th>EDITAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $pais)
                            <tr>
                                <td>{{ $pais->id }}</td>
                                <td>{{ $pais->nombre }}</td>
                                <td>{{ $pais->created_at }}</td>
                                <td><a href="{{ route('delete.pais', $pais->id) }}"><i class="fas fa-edit"></i></a></td>
                                <td><a href="{{ route('delete.pais', ['id'=>$pais->id]) }}"><i class="fas fa-trash"></i></a></td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </nav>
    </div>

    <div class="column is-3">
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
                    <form action="{{ route('ImportarXlsx') }}" method="post">
                        @csrf
                        <!--div class="file">
                            <label class="file-label">
                                <input class="file-input" type="file" name="archivo_xlsx">
                                <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Choose a file…
                                </span>
                                </span>
                            </label>
                        </div-->

                        <input type="file" name="archivo_xlsx">
                        <button class="button is-danger" type="submit">Cargar</button>
                    </form>
                </div>                  
            </nav>
    </div>
</div>
@endsection