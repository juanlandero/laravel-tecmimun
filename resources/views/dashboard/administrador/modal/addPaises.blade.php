<div class="modal" id="addPaises">
    <div class="modal-background" onclick="dismissModal('#addPaises')"></div>
    <div class="modal-content">
        <div class="box">
            <div class="columns">
                <p class="column" style="float: right"> 
                    <label class="checkbox"><input type="checkbox" onclick="toggle(this)" checked /> Seleccionar/Deseleccionar todos</label>
                </p>

                <p class="column" style="float: right"> 
                    <form id="delete_paises" method="GET">
                        @csrf
                        <input type="hidden" name="comite" id="delete_comite" value="">
                        <button id="btn_limpiar" class="button is-outlined is-success" type="submit"><i class="fas fa-trash"></i> Limpiar comité</button>
                    </form>
                </p>
                
            </div>


            <form action="{{ route('save.paiscomite') }}" method="post"> 
                @csrf
                <input type="hidden" name="comite" id="comite" value="" >
                <div class="columns is-multiline" id="paises">

                </div>
                <div class="column has-text-centered">
                    <button id="btn_enviar" type="submit" class="button is-rounded is-primary is-outlined">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" onclick="dismissModal('#addPaises')" aria-label="close"></button>
</div>