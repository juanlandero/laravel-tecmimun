<br>
<div class="columns">
    <div class="column is-12">
        <form id="nuevaLista" method="post" class="columns is-mobile is-centered">
            @csrf
            <input type="hidden" name="comite" value="{{ Auth::user()->email }}">
            <div class="column is-8-mobile is-5-desktop">
                <input class="input is-primary is-rounded" placeholder="Nuevo pase de lista" name="nombre" id="codigo" type="text" maxlength="20" required autocomplete="off">
            </div>
            <div class="column is-4-mobile is-3-desktop">
                <button id="idbutton" class="button is-success is-rounded is-outlined" type="submit">Crear</button>
            </div>
        </form>
    </div>
</div>
<br><br>
<div class="columns is-multiline">
    
    @foreach ($listas as $lista)
    <div class="column is-4">
        <article class="message is-success">
            <div class="message-header">
              <p>{{ $lista->lista }}</p>
              <button class="delete" aria-label="delete"></button>
            </div>
            <div class="message-body">
                <p>Id: {{ $lista->id }}</p>
                <p>Creada: {{ $lista->created_at }}</p>
                <p>
                    <button onclick="modalLista({{ $lista->id }})" class="button is-rounded is-fullwidth is-primary is-outlined">
                        <span class="icon is-small">
                            <i class="fas fa-check"></i>
                        </span>
                        <span>Tomar asistencia</span>
                    </button>
                </p>
            </div>
        </article>
    </div>
    @endforeach
</div>

@include('dashboard.modal_lista')
<script src="{{ asset('js/lista.js') }}"></script>