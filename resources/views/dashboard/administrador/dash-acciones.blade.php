@extends('dashboard.plantilla.main-admin')

@section('titulo', 'Acciones')

@section('contenido')

<div class="columns">
    <div class="column">
        <article class="message is-success">
            <div class="message-header">
                <p>FILTRAR BÚSQUEDA</p>
            </div>
            <div class="message-body has-text-centered">
                <form id="mostrar_tabla" method="post">
                    @csrf
                    <div class="columns">
                        <div class="column">
                            <div class="select">
                                <select  id="select_accion" name="modo">
                                    <option>Tabla por:</option>
                                    <option value="3">Todos los Alumnos</option>
                                    <option value="1">Comités</option>
                                    <option value="2">Escuelas</option>
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <div class="select" >
                                <select id="option_accion" name="opcion">
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <button type="submit" class="button is-rounded is-success is-outlined">Cargar tabla</button>
                        </div>
                    </div>
                </form>
            </div>
        </article>
    </div>
</div>


<div class="columns">
    <div class="column">
        <div class="columns is-hidden-desktop is-hidden-tablet">
            <div class="column has-text-centered">
                <strong><span class="nombre" ></span></strong>
            </div>
        </div>
        <div style="position: relative; left: 32%; top: 33px; width: 65%;" class="has-text-centered is-hidden-mobile">
            <strong><span class="nombre" ></span></strong>
        </div>
        <table id="tabla-acciones">

        </table>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/dashboard/dash-acciones.js') }}"></script>    
@endsection