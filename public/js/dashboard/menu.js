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

$('#comite_admin').change(function(){
    
    var dato = $('#comite_admin').val();

    $.ajax({
        url: '../admin/setComite',
        type: 'get',
        dataType: 'json',
        data: 'comite='+dato
    })
    .done(function(d){
        alert('Se cambio de comité. Recargue la página');
        console.log(d);
    })
    .fail(function(){
        alert("Fallos en el sistema");
    });
});