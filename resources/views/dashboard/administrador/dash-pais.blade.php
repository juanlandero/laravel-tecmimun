@extends('dashboard.plantilla.main-admin')

@section('titulo', 'Pais')

@section('contenido')

<div class="columns is-centered">
    <div class="column is-8">
        <article class="message is-success">
            <div class="message-header">
                <p>DELEGACIONES</p>
            </div>
            <div class="message-body">
                <table class="table is-fullwidth" id="tabla-paises" style="background-color: transparent;">
                
                </table>
            </div>
        </article>
    </div>

    <div class="column is-4 ">

        <article class="message is-success">
            <div class="message-header">
                <p>AGREGAR PAÍSES</p>
            </div>
            <div class="message-body has-text-centered">
                <form id="nuevo-pais" method="post">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-rounded" name="nombre_pais" id="pais" type="text" placeholder="País" required autocomplete="off">
                        </div>
                    </div>
                    <div class="field">
                        <div class="select is-multiple is-fullwidth">
                            <select multiple size="3" name="idioma" required>
                                <option value="1">Español</option>
                                <option value="2">Inglés</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="button is-success is-rounded is-outlined">Crear</button>
                </form>
            </div>
        </article>

        <article class="message is-success">
            <div class="message-header">
                <p>IMPORTAR PAÍSES</p>
            </div>
            <div class="message-body has-text-centered">
                <form action="{{ route('ImportarXlsx') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="file has-name is-boxed is-fullwidth">
                        <label class="file-label">
                            <input class="file-input" type="file" name="archivo_xlsx" id="file" required>
                            <span class="file-cta">
                                <span class="file-icon"><i class="fas fa-file-excel"></i></span>
                                <span class="file-label">Examinar</span>
                            </span>
                            <span class="file-name" id="filename"></span>
                        </label>
                    </div>
                    <br>
                    <button class="button is-success is-rounded is-outlined" type="submit">Cargar</button>
                </form>
            </div>
        </article>
    </div>
</div>

@endsection

@section('scripts')
    <script src="{{ asset('js/dashboard/dash-pais.js') }}"></script>
@endsection