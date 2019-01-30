@extends('admin.plantilla')

@section('body')

@section('seccion', 'Comite')

<div class="columns is-centered">
    <div class="column is-9">

        <nav class="panel">
            <p class="panel-heading">Comites</p>
            <div class="panel-block">
                <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>IDIOMA</th>
                    <th>CREADO</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $comite)
                    <tr>
                        <td>{{ $comite->id }}</td>
                        <td>{{ $comite->nombre }}</td>
                        <td>{{ $comite->idioma }}</td>
                        <td>{{ $comite->created_at }}</td>
                        <td><a href="{{ route('delete.comite', ['id'=>$comite->id]) }}"><i class="fas fa-trash"></i></a></td>
                    </tr>
               @endforeach
            </tbody>
        </table>
            </div>
        </nav>


        
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
                                <option value="Frances">Frances</option>
                            </select>
                        </div>
                    </div>



                    <button type="submit" class="button is-rounded is-danger">Enviar</button>
                </form>
            </div>                  
        </nav>
    </div>
</div>
@endsection