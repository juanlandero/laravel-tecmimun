@extends('admin.plantilla')

@section('body')

@section('seccion', 'Escuela')

<div class="columns is-centered">
    <div class="column is-9">

        <nav class="panel">
            <p class="panel-heading">Escuela</p>
            <div class="panel-block">
                <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>RESPONSABLE</th>
                    <th>E-MAIL</th>
                    <th>REGISTRADOS</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($data as $escuela)
                    <tr>
                        <td>{{ $escuela->id }}</td>
                        <td>{{ $escuela->nombre }}</td>
                        <td>{{ $escuela->responsable }}</td>
                        <td>{{ $escuela->email }}</td>
                        <td>s/n</td>
                        <td><a href="{{ route('delete.escuela', ['id'=>$escuela->id]) }}"><i class="fas fa-trash fa-lg"></i></a></td>
                    </tr>
               @endforeach
            </tbody>
        </table>
            </div>
        </nav>


        
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


<div class="columns is-centered">
    <div class="column is-5 box">
        <h1 class="subtitle">Crear Pre registros</h1>
        <form action="{{ route('preregistro.escuela') }}" method="post">
            @csrf
            <div class="select">
                <select name="id_escuela">
                    @foreach ($data as $option)
                        <option value="{{ $option->id }}">{{ $option->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="select">
                <select name="id_comite">
                    @foreach ($comite as $option)
                        <option value="{{ $option->id }}">{{ $option->nombre }}</option>
                    @endforeach
                    
                </select>
            </div>
            <button class="button is-info" type="submit">Elegir Paises</button>
        </form>
    </div>
</div>
@endsection