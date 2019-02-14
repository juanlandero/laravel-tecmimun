<div class="modal" id="modalCodigo">
    <div class="modal-background" onclick="dismissModal('#modalCodigo')"></div>
    <div class="modal-content">
        <div class="box">
            
            <div class="columns">
                <p class="title is-4">Generar códigos</p>
            </div>

            <form action="{{ route('codigos.escuela') }}" method="post">
                @csrf
                <div class="columns">
                    <input type="hidden" name="escuela" id="id_escuela" value=""> 
                    <div class="column is-4">
                        <p class="subtitle is-5">Comités:</p>
                        <div class="select">
                            <select name="id_comite" id="id_comite">
                                <option value="0">Selecciona un comité</option>
                                @foreach ($comite as $option)
                                    <option value="{{ $option->id }}"> {{ $option->nombre }}</option>
                                @endforeach 
                            </select>
                        </div>
                    </div>
                    
                    <div class="column is-1"></div>

                    <div class="column is-7">                       
                        <p class="subtitle is-5">Países disponibles:</p>
                        <div id="paises" class="columns is-multiline">

                        </div>
                    </div>
                </div>
                <div class="columns has-text-centered">
                    <div class="column">
                        <button id="generar" type="submit" class="button is-danger" disabled>Generar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" onclick="dismissModal('#modalCodigo')" aria-label="close"></button>
</div>