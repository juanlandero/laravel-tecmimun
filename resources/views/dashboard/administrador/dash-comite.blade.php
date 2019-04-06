@extends('dashboard.plantilla.main-admin')

@section('titulo', 'Pais')

@section('contenido')

<div class="columns is-centered">
    <div class="column is-9">
        <div class="columns is-multiline">
            @foreach ($comites as $comite)
                <div class="column is-6" id="{{ $comite['id'] }}">
                    <div class="notification is-light"  style="height: 240px">
                        <a onclick="deleteComite({{ $comite['id'] }})" class="delete" aria-label="delete"></a>
                        <p style="margin-bottom: 10px"><strong>{{ $comite['nombre'] }}</strong></p><br>
                        <p>Idioma: {{$comite['idioma'] }}</p>
                        <p>Usuario: {{$comite['mail'] }}</p>
                        <p>Países: {{ $comite['paises'] }}</p>

                        <div class="columns has-text-centered is-mobile" style="position: absolute; bottom: 20px;">
                            <div class="column">
                                <a onclick="modalRegistros({{ $comite['id'] }})" class="button is-primary is-outlined is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-th-list"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a onclick="modalAddPaises({{ $comite['id'] }})" class="button is-primary is-outlined is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-flag"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="{{ route('excel', ['comite' => $comite['id']]) }}" class="button is-primary is-outlined is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-file-excel"></i>
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
        <article class="message is-success">
            <div class="message-header">
                <p>AGREGAR COMITÉ</p>
            </div>
            <div class="message-body has-text-centered">
                <form action="{{ route('save.comite') }}" method="post">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-rounded" name="nombre_comite" type="text" placeholder="Comité" required autocomplete="off">
                        </div>
                    </div>
                    <div class="field">
                        <div class="select is-multiple is-fullwidth">
                            <select multiple size="3" name="idioma" required>
                                <option value="Español">Español</option>
                                <option value="Inglés">Inglés</option>
                                <option value="Francés">Francés</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="button is-success is-rounded is-outlined">Crear</button>
                </form>
            </div>
        </article>
    </div>

    @include('dashboard.administrador.modal.inscritos')
    @include('dashboard.administrador.modal.addPaises')
@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/dash-comite.js') }}"></script>
@endsection