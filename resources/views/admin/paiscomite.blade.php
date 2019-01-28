@extends('admin.plantilla')

@section('body')

@section('seccion', 'Países en Comités')

<div class="columns is-centered">
    <div class="column is-7">

        @foreach ($comites as $comite)
        <nav class="panel">
            <p class="panel-heading">
                {{ $comite->id }} | {{ $comite->nombre }} 
                <a href="{{ route('delete.paiscomite', ['id'=>$comite->id]) }}" style="float: right"><i class="fas fa-trash"></i> Eliminar</a>
            </p>
                <div class="panel-block">
                    <table class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PAÍS</th>
                                <th>DISPONIBLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pc as $item)
                                @if ($item->pk_comite == $comite->id)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->pais }}</td>
                                    <td>{{ $item->disponible }}</td>
                                </tr>
                                @endif
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </nav>
        @endforeach
        
        
  

        
    </div>
    <div class="column is-5">
        <nav class="panel">
            <p class="panel-heading">Agregar a Comité</p>
            <div class="panel-block">
                <form action="{{ route('save.paiscomite') }}" method="post">
                    @csrf
                    
                    <div class="field">
                        <div class="select is-multiple">
                            <select multiple size="3" name="comite" required>
                                @foreach ($comites as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>  
                                @endforeach
                            </select>
                        </div>
                    </div>

                   @foreach ($paises as $item)
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox" value="{{ $item->id }}" name="paises[]">
                                {{ $item->nombre }}
                            </label>
                        </div>
                   @endforeach


                    <button type="submit" class="button is-rounded is-danger">Enviar</button>
                </form>
            </div>                  
        </nav>
    </div>
</div>
@endsection