@extends('dashboard.plantilla.main-comite')

@section('titulo', 'Puntos')

@section('contenido')
<div class="column is-12">
        <div class="columns has-text-centered box">
            <label class="column ">
                <div class="button is-primary is-outlined is-normal is-rounded">
                    <input type="radio" name="accion" value="1"><span style="margin-left: 10px;"><strong>+ 1</strong></span>
                </div>
            </label>

            <label class="column">
                <div class="button is-primary is-outlined is-normal is-rounded">
                    <input type="radio" name="accion" value="2"><span style="margin-left: 10px;"><strong>- 1</strong></span>
                </div>
            </label>
            <label class="column">
                <div class="button is-primary is-outlined is-normal is-rounded">
                    <input type="radio" name="accion" value="3"><span style="margin-left: 10px;">+1 Amonestación</span>
                </div>
            </label>
            <label class="column">
                <div class="button is-primary is-outlined is-normal is-rounded">
                    <input type="radio" name="accion" value="4"><span style="margin-left: 10px;">-1 Amonestación</span>
                </div>
            </label>
            <div class="column">
                <button class="button is-success is-outlined" id="ver_amonestaciones">
                    <i class="fas fa-external-link-square-alt"></i>
                </button>
            </div>
        </div>
    </div><br>
<div class="columns  is-multiline">
    

    @foreach ($user as $item)
        <div class="column is-4">
            <button class="button is-fullwidth is-medium is-success is-outlined" onclick="setAccion({{ $item->delegacion }}, '{{ $item->pais }}')">
                {{ $item->pais }}
            </button>
        </div>
    @endforeach

</div>

@include('dashboard.comites.modal.amonestaciones')
@endsection
@section('scripts')
    <script src="{{ asset('js/slider-uikit/uikit.js') }}"></script>
    <script src="{{ asset('js/table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/dashboard/dash-puntos.js') }}"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/ui-kit.css') }}">
@endsection