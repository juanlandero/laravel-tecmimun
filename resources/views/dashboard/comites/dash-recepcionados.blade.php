@extends('dashboard.plantilla.main-comite')

@section('titulo', 'Recepcionados')

@section('contenido')

<div class="column">
    <table class="table is-fullwidth">
        <thead>
            <tr>
                <th> NOMBRE </th>
                <th> ESCUELA </th>
                <th> PAÍS </th>
                <th> CÓDIGO </th>
                <th> ENTRADA </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($delegados as $delegado)
                <tr>
                    <td>{{ $delegado->alumno }}</td>
                    <td>{{ $delegado->escuela }}</td>
                    <td>{{ $delegado->pais }}</td>
                    <td>{{ $delegado->codigo }}</td>
                    <td>{{ $delegado->fecha }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection