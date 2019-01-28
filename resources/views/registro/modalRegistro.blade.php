<div class="modal" id="modal">
    <div class="modal-background"></div>
    <div class="modal-content">
        <div class="box section">

            <p class="sub-title">Tu coordinador debe proporcionarte este código, para poder confirmar tu pre-registro</p>

            <br><br>
            <form action="{{ route('ConfirmarCodigo') }}" method="post">
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
        </div>
    </div>

    

    <button class="modal-close is-large" aria-label="close" onclick="toggleModal();"></button>
</div>

