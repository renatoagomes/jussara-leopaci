!function(t){var e={};function a(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,a),o.l=!0,o.exports}a.m=t,a.c=e,a.d=function(t,e,n){a.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:n})},a.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return a.d(e,"a",e),e},a.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},a.p="",a(a.s=45)}({1:function(t,e){$(function(){$('a[href*="#"]').not('[href="#"]').not('[data-toggle="tab"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},650,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}})})},45:function(t,e,a){t.exports=a(46)},46:function(t,e,a){a(1),window.trocaSlides=function t(){$(".slide.active").fadeOut(),setTimeout(function(){var e=$(".slide.active");e.removeClass("active");var a=e.next().length?e.next():e.parent().find(".slide").first(),n=a.data("duracao")?a.data("duracao")+"000":5e3;a.addClass("active").fadeIn(),setTimeout(t,n)},900)},$(function(){var t=$(".slide.active").data("duracao")?$(".slide.active").data("duracao"):5e3;setTimeout(trocaSlides,t+"000"),$("#navbarNavAltMarkup").on("show.bs.collapse",function(){$(".container-slides-home").hide()}),$("#navbarNavAltMarkup").on("hide.bs.collapse",function(){$(".container-slides-home").show()})})}});