
//Dando require no JS de Smooth scroll to link
require ('./smooth-scroll')

/** para trocar de textos na home **/
window.trocaSlides = function trocaSlides() {
    $('.slide.active').fadeOut();

    //Delay para a animacao de fadeOut terminar.
    setTimeout(function(){
        var ativo = $('.slide.active');
        ativo.removeClass("active");

        //pegando proximo slide e sua duracao
        var next = ativo.next().length ? ativo.next() : ativo.parent().find('.slide').first();
        var duracao = next.data('duracao') ? next.data('duracao')+'000' : 5000 ;

        //mostrando slide e dando inicio no timer
        next.addClass('active').fadeIn();
        setTimeout(trocaSlides, duracao);
    }, 900);
}

$(function () {
    let duracao = $('.slide.active').data('duracao') ? $('.slide.active').data('duracao') : 5000 ;
    setTimeout(trocaSlides, duracao+'000');

    //Ao mostrar menu, trocar classe e esconder slides
    $("#navbarNavAltMarkup").on('show.bs.collapse', function() {
        $(".container-slides-home").hide();
    });
    //Ao mostrar menu, trocar classe e esconder slides
    $("#navbarNavAltMarkup").on('hide.bs.collapse', function() {
        $(".container-slides-home").show();
    });
});
