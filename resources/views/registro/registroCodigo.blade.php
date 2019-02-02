@extends('plantilla.second')

@section('titulo', 'Registro')

@section('body')

<section class="section">
    
    <p class="sub-title">Tu coordinador debe proporcionarte este código, para poder confirmar tu pre-registro</p>

    <br><br>
    <form method="post" id="codigo">
        @csrf
        <div class="columns is-centered">
            <div class="field has-addons">
                <div class="control">
                    <input class="input" type="text" name="codigo" placeholder="Ingresa tu código">
                </div>

                <div class="control">
                    <button type="submit" class="button is-success">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
    <span id="result"></span>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/ajax.js') }}"></script>
@endsection



