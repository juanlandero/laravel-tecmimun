@extends('plantilla.index')

@section('titulo', 'Paises')

@section('body')
<div class="container">
    <form action="{{ route('GuardarPais') }}" method="post">
        @csrf
        <div class="column">
            <label for="nombre" class="label">Nombre:</label>
            <div class="control">
                <input type="text" class="input" name="nombre" id="nombre" placeholder="Nombre del pais" required>
            </div>
        </div>
        <div class="control">
            <button type="submit" class="button is-success is-rounded">Guardar</button>
        </div>
    </form>
    <br>
    <br>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Modificado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paises as $pais)
                    <tr>
                        <td>{{ $pais->id }}</td>
                        <td>{{ $pais->nombre }}</td>
                        <td>{{ $pais->created_at }}</td>
                        <td>{{ $pais->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection