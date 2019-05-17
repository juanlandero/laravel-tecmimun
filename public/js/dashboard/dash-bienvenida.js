$(document).ready(function(){
    UIkit.scrollspy();

    cycleQuotes(quotes, index, ".split");

    $('form#checkin').submit(function(e){

        e.preventDefault();
        var data = $(this).serializeArray();

        $.ajax({
            url: 'bienvenida/Check',
            type: 'POST',
            dataType: 'json',
            data: data
        })
        .done(function(dato){
            if (dato.estado) {
                $('#modal_bienvenido').addClass('is-active');

                setTimeout(() => {
                    toggleModal('modal_bienvenido');
                }, 5000);

                $('#codigo').val('');

            }else{
                UIkit.notification({
                    message: '<i class="fas fa-sad-cry"></i> El código no existe.',
                    status: 'danger',
                    pos: 'top-center',
                    timeout: 4000
                });
            }
        })
        .fail(function(dato){
            alert('Error en el sistema.');
        });
    });

    var tiempo;
    
    var n = 1;
    tiempo= window.setInterval(function(){
        n++;
        document.onclick = function(){
            n =0;
        }
        $('#dissmiss').onclick = function(){
            n =0;
        }
        if (n == 120) {
            $('#modal-wait').addClass('is-active');
        }
    },1000);

        

    });


function toggleModal(id_modal){

    var modal = $('#'+id_modal);
    var hasClass = modal.hasClass('is-active');

    if(hasClass){
        modal.removeClass('is-active');
    }else{
        modal.addClass('is-active');
    }
}


var quotes = [
    "Estados Unidos Mexicanos",
    "Republic of Korea",
    "Rumania",
    "Arab Republic of Egypt",
    "República Popular de China",
    "República Argentina",
    "Estados Unidos de América",
    "Belice",
    "Estado de Japón",
    "República de Panamá",
    "Russian Federation",
    "Republic of Turkey",
    "República Italiana",
    "Jamaica",
    "Nueva Zelanda",
    "Antigua y Barbuda",
    "Canada"
];

var index = 0;
var max = quotes.length - 1;
var delay = .1;

function random(min, max){
    return (Math.random() * (max - min)) + min;
}

function cycleQuotes(arr, i, sel){
    var el = $(sel);
    var message = arr[i];
    el.html(message);
    var split = new SplitText(el);
    var time = split.chars.length * delay;

    $(split.chars).each(function(i){
        TweenMax.from($(this), time, {
            opacity: 0,
            x: 0,
            y: random(-200, 200),
            z: random(500, 1000),
            // scale: .1,
            delay: i * delay,
            yoyo: true,
            repeat: -1,
            repeatDelay: time * 4,
            ease: Power1.easeOut
        });
    });

    index = index == max ?  0 : (index + 1);

    setTimeout(function(){
        cycleQuotes(quotes, index, ".split");
    }, ((time * 4) + (time * 4)) * 1000);
}