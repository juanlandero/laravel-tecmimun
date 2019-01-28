@extends('admin.plantilla')
@section('body')

@section('seccion', 'Panel')

<nav class="panel">
    <p class="panel-heading">Pre-inscripciones</p>
    <div class="panel-block">
        <div class="container">
        <div class="columns">

            @foreach ($comites as $comite)

                <div class="column">
                    <article class="message is-info">
                        <div class="message-body">
                            <span>{{ $comite->nombre." - ".$comite->idioma }} </span>
                            <p>
                                @foreach ($pc as $item)
                                    @if ($item->pk_comite == $comite->id)
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            {{ $item->pais}}
                                        </label>
                                    @endif
                                @endforeach
                            </p>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        </div>
            
    </div>
</nav>



@endsection