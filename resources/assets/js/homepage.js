
//Dando require no JS de Smooth scroll to link
require ('./smooth-scroll')

/** para trocar de textos na home **/
window.trocaSlides = function trocaSlides() {
    $('.slide.active').fadeOut();

    setTimeout(function(){
        var ativo = $('.slide.active');
        ativo.removeClass("active");

        var next = ativo.next().length ? ativo.next() : ativo.parent().find('.slide').first();
        next.addClass('active').fadeIn();
        setTimeout(trocaSlides, 7500);
    }, 900);
}

$(function () {
    setTimeout(trocaSlides, 6000);
});

