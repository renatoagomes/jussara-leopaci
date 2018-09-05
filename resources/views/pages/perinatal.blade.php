@extends ('layouts.master')

@section ('css')
    <link rel="stylesheet" href="/css/perinatal.css" type="text/css" media="screen" title="no title" charset="utf-8">
@endsection

@section ('content')

    {{-- Incluindo banner que contem o menu --}}
    @include('pages.perinatal.banner')

    {{-- Incluindo Seção 'Um conexto sobre perinatalidade...' --}}
    @include('pages.perinatal.contexto')

    {{-- Incluindo Seção 'Em Que Momentos..' --}}
    @include('pages.perinatal.momentos')

    {{-- Incluindo Seção 'Como funciona' --}}
    @include('pages.perinatal.como_funciona')
    

    {{-- Incluindo Footer --}}
    @include('partials.footer')

@endsection

@section('js')
        <script src="/js/perinatal.js" ></script>
@endsection
