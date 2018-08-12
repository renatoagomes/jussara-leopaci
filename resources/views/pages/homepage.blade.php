@extends ('layouts.master')

@section ('css')
<link rel="stylesheet" href="/css/homepage.css" type="text/css" media="screen" title="no title" charset="utf-8">
@endsection

@section ('content')

<div class="flex flex-col justify-center items-center w-screen h-screen">
    {{-- NAV --}}

    <div>
    <nav class="flex w-screen justify-between">
        <img src="{{-- Logo no cloudinary? --}}" alt="Logo Jussara Leopaci"/>
        <div class="flex justify-between w-1/3">
        <a href="/home/">Home</a> 
        <a href="#apresentacao/">Apresentacao</a> 
        <a href="#atuacao/">Atuacao</a> 
        <a href="/perinatal/">Perinatal</a> 
        <a href="#contato/">Contato</a> 
        </div>
    </nav>
    </div>

    {{-- Banner --}}
    {{-- Apresentacao --}}
    {{-- Atuação --}}
    {{-- Contato --}}
    {{-- Footer --}}

    <h1>Jussara Leopaci</h1>

</div>

@endsection
