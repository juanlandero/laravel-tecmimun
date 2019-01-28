@extends('admin.plantilla')
@section('seccion', 'Crear registros')
@section('body')

<nav class="panel">
    <p class="panel-heading">Elige los paises que asignarás a esta escuela</p>
    <div class="panel-block">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <p class="title is-size-5-desktop">Escuela: {{ $escuela->nombre }}</p>
                    <p class="title is-size-5-desktop">Comité: {{ $comite->nombre }}</p>
                </div>
                <div class="column is-6">
                    <form action="{{ route('preregistro.generados') }}" method="post">
                        @csrf

                        <input type="hidden" name="id_escuela" value="{{ $escuela->id }}">
                        <input type="hidden" name="id_comite" value="{{ $comite->id }}">
                        <div class="container">
                            @foreach ($paises as $item)
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" value="{{ $item->id }}" name="paises[]">
                                        {{ $item->pais }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
        
                        <button type="submit" class="button is-rounded is-danger">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>                  
</nav>
    
@endsection