

function paseLista(){
    $('#contenido').load('getLista');
    $('#titulo').html('Pase de lista');
}

function controlPuntos(){
    $('#contenido').load('getPuntos')
    $('#titulo').html('Panel de puntos');
}

function infoComites(){
    $('#contenido').load('getInfo');
    $('#titulo').html('Información del comité');
}

document.addEventListener('DOMContentLoaded', () => {

    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {
                const target = el.dataset.target;
                const $target = document.getElementById(target);

                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
            });
        });
    }

});