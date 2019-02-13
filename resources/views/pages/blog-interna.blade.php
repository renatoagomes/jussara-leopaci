@extends ('layouts.master')

@section ('css')
    <link rel="stylesheet" href="/css/blog.css" type="text/css" media="screen" title="no title" charset="utf-8">
@endsection

@section ('content')

    {{-- Incluindo banner que contem o menu --}}
    @include('pages.blog.banner')

    {{-- Incluindo listagem de posts --}}
    @include('pages.blog.interna')

    {{-- Incluindo Footer --}}
    @include('partials.footer')

@endsection

@section('js')
        <script src="/js/blog.js" ></script>
@endsection
