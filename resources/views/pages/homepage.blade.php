@extends ('layouts.master')

@section ('css')
    <link rel="stylesheet" href="/css/homepage.css" type="text/css" media="screen" title="no title" charset="utf-8">
@endsection

@section ('content')

    {{-- Incluindo banner que contem o menu --}}
    @include('pages.homepage.banner')

    {{-- Incluindo Seção 'Apresentação' --}}
    @include('pages.homepage.apresentacao')

    {{-- Incluindo Seção 'Atuacao' --}}
    @include('pages.homepage.atuacao')

    {{-- Incluindo Seção 'Contato' --}}
    @include('pages.homepage.contato')

    {{-- Incluindo Footer --}}
    @include('partials.footer')

@endsection

@section('js')
        <script src="/js/homepage.js" ></script>
<script>

/** para trocar de textos na home **/
function trocaSlides() {
    $('.slide.active').fadeOut();

    setTimeout(function(){
        var ativo = $('.slide.active');
        ativo.removeClass("active");

        var next = ativo.next().length ? ativo.next() : ativo.parent().find('.slide').first();
        next.addClass('active').fadeIn();
        setTimeout(trocaSlides, 7500);
    }, 900);
}

setTimeout(trocaSlides, 6000);

</script>
@endsection
