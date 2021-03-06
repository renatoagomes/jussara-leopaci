@extends ('layouts.master')

@section ('css')
    <link rel="stylesheet" href="/css/homepage.css" type="text/css" media="screen" title="no title" charset="utf-8">

    <style>

#header-home {
    background-image: url({{ $Homepage->linkFotoFundo }});
}

    </style>
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
@endsection
