<div class="modal" id="alumnos">
    <div class="modal-background" onclick="dismissModal('#alumnos')"></div>
    <div class="modal-content">
        <div class="box">
            <div class="columns is-hidden-desktop is-hidden-tablet">
                <div class="column has-text-centered">
                    <strong><span class="escuela_nombre" ></span></strong>
                </div>
            </div>
            <div style="position: absolute; left: 32%; top: 33px; width: 65%;" class="has-text-centered is-hidden-mobile">
                <strong><span class="escuela_nombre" ></span></strong>
            </div>
            <table class="table is-fullwidth" id="escuela-detail">
               
            </table>
        </div>
    </div>
    <button class="modal-close is-large" onclick="dismissModal('#alumnos')" aria-label="close"></button>
</div>