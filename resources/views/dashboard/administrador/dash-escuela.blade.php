@extends('dashboard.plantilla.main-admin')

@section('titulo', 'Escuelas')

@section('contenido')


<div class="columns is-centered">
    <div class="column is-9">
        <div class="columns is-multiline">
            @foreach ($data as $escuela)
                <div class="column is-6" id="{{ $escuela->id }}">
                    <div class="notification is-light"  style="height: 240px">
                        <a onclick="deleteEscuela({{ $escuela->id }})"  class="delete" aria-label="delete"></a>
                        <p style="margin-bottom: 10px">{{ $escuela->nombre }}</p>
                        <br>
                        <p>Responsable: {{ $escuela->responsable }}</p>
                        <p>E-mail: {{ $escuela->email }}</p>
                        <p>Contraseña: {{ $escuela->password }}</p>
                        
                        <div class="columns is-centered is-mobile" style="position: absolute; bottom: 15px;">
                            <div class="column">
                                <a onclick="modalRegistros({{ $escuela->id }})" class="button is-primary is-outlined is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-th-list"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a onclick="launchModal('#modalCodigo', {{ $escuela->id }})" class="button is-primary is-outlined is-medium">
                                    <span class="icon is-small">
                                        <i class="fas fa-qrcode"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="column">
                                <a href="{{ route('excelAlumnos', ['escuela' => $escuela->id]) }}" class="button is-primary is-outlined is-medium">
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
                <p>AGREGAR ESCUELA</p>
            </div>
            <div class="message-body has-text-centered">
                <form action="{{ route('save.escuela') }}" method="post">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input" name="nombre_escuela" type="text" placeholder="Escuela" required autocomplete="off">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" name="nombre_responsable" type="text" placeholder="Responsable" required autocomplete="off">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" name="mail" type="email" placeholder="E-mail" required autocomplete="off">
                        </div>
                    </div>
                    
                    <button type="submit" class="button is-rounded is-success is-outlined">Crear</button>
                </form>
            </div>
        </article>
    </div>
</div>

    @include('dashboard.administrador.modal.registrosEscuela')
    @include('dashboard.administrador.modal.codigo')


@endsection
@section('scripts')
    <script src="{{ asset('js/dashboard/dash-escuela.js') }}"></script>
@endsection