
//Dando require no JS de Smooth scroll to link
require ('./smooth-scroll')

$(function () {
    $('.post-body').find('a[href="http://referencia"]').attr('href', '#abnt');
    $('.post-body').find('a[href="http://referencias"]').attr('href', '#abnt');
    $('.post-body').find('a[href="http://rodape"]').attr('href', '#abnt');
});
