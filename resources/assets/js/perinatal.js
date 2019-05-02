
//Dando require no JS de Smooth scroll to link
require ('./smooth-scroll')

$(function () {
    $('body').find('a[href="http://abnt"]').attr('href', '#abnt');
    $('body').find('a[href="http://referencia"]').attr('href', '#abnt');
    $('body').find('a[href="http://referencias"]').attr('href', '#abnt');
    $('body').find('a[href="http://rodape"]').attr('href', '#abnt');
});
