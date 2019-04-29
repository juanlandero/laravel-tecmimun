document.addEventListener('DOMContentLoaded', () => {

    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  
    if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach( el => {
            el.addEventListener('click', () => {
  
            const target = el.dataset.target;
            const $target = document.getElementById(target);
  
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
  
            });
        });
    }
});

$(document).ready(function(){
    UIkit.scrollspy();
});

window.onload = function() {
    $("#div-loader").delay(200).fadeOut("slow");
    
}

function toggleModal(id){

    var modal = $(id);

    if (modal.hasClass('is-active')) {
        modal.removeClass('is-active')
    }else{
        modal.addClass('is-active')
    }

}