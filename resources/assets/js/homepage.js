
//Dando require no JS de Smooth scroll to link
require ('./smooth-scroll')

/** para trocar de textos na home **/
window.trocaSlides = function trocaSlides() {
    $('.slide.active').fadeOut();

    setTimeout(function(){
        var ativo = $('.slide.active');
        ativo.removeClass("active");
        var duracao = ativo.data('duracao') ? ativo.data('duracao')+'000' : 5000 ;

        console.log('chamou trocaSlide, duracao: ' + duracao);

        var next = ativo.next().length ? ativo.next() : ativo.parent().find('.slide').first();
        next.addClass('active').fadeIn();
        setTimeout(trocaSlides, duracao);
    }, 900);
}

$(function () {
    let duracao = $('.slide.active').data('duracao') ? $('.slide.active').data('duracao') : 5000 ;
    setTimeout(trocaSlides, duracao+'000');
});

