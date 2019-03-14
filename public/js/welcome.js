$(document).ready(function(){
    UIkit.scrollspy();

    cycleQuotes(quotes, index, ".split");

    $('form#checkin').submit(function(e){

        e.preventDefault();
        var data = $(this).serializeArray();

        $.ajax({
            url: '/delegate/Check',
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
                    timeout: 5000
                });
            }
        })
        .fail(function(dato){
            alert('Error en el sistema.');
        });
    });

   
    document.onmousemove = function(){
        //alert('sad');
    }

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
    "México",
    "España",
    "Venezuela",
    "Estados Unidos",
    "Republica de Korea"
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