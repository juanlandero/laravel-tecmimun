<div class="modal" id="addPaises">
    <div class="modal-background" onclick="dismissModal('#addPaises')"></div>
    <div class="modal-content">
        <div class="box">
            <div class="columns">
                <p class="column" style="float: right"> 

                    <form action="{{ route('delete.paiscomite') }}" method="GET">
                        @csrf
                        <input type="hidden" name="comite" id="delete_comite" value="">
                        <button class="button" type="submit"><i class="fas fa-trash"></i> Limpiar comité</button>
                    </form>
                
                </p>
                

            </div>


            <form action="{{ route('save.paiscomite') }}" method="post">
                @csrf
                <input type="hidden" name="comite" id="comite" value="" >
                <div class="columns is-multiline" id="paises">

                </div>
                <button type="submit" class="button is-rounded is-danger">Enviar</button>
            </form>
        </div>
    </div>
    <button class="modal-close is-large" onclick="dismissModal('#addPaises')" aria-label="close"></button>
</div>