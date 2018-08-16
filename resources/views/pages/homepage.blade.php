@extends ('layouts.master')

@section ('css')
<link rel="stylesheet" href="/css/homepage.css" type="text/css" media="screen" title="no title" charset="utf-8">

<style>
    #header-home {
        background-image: url(https://res.cloudinary.com/vivala/image/upload/v1534369785/Jussara-Leopaci/home_header_bg.png);
        background-size: cover;
        height:100vh;
        max-width:100vw;
    }

    #header-home nav a {
        margin-top: 2rem;
        color: #cdcdcd;
        font-style: italic;
        font-family: 'Muli', sans-serif;
    }

    .container-texto {
        font-family: 'Street Corner', sans-serif;
        text-align: right;
        margin-top:5rem;
        float:right;
        color: white;
    }

</style>


@endsection

@section ('content')

<section id="header-home" class="row">
    <div class="container">
        <nav class="d-flex justify-content-between align-items-start">
            <img class="img-fluid" src="http://res.cloudinary.com/vivala/image/upload/q_auto/v1534369782/Jussara-Leopaci/logo.png" alt="Logo Jussara Leopaci"/>
            <a href="/home/">Home</a> 
            <a href="#apresentacao/">Apresentacao</a> 
            <a href="#atuacao/">Atuacao</a> 
            <a href="/perinatal/">Perinatal</a> 
            <a href="#contato/">Contato</a> 
        </nav>

        <div class="container-texto ">
            <h2>Lorem ipsum dolor <br> sit amet consectetur</h2>
            <p>Lorem Analise kasjd sldkk optu lalala xpto <br> kasjd sldkk optu lalala xpto <br> xsksk optu lalala xpto</p>
        </div>
    </div>
</section>

<section id="Apresentacao" class="container">
    <div class="text-center">
        <span class="detalhe-top">________</span>
        <h2>Apresentacao</h2>
        <span class="text-small">Um pouco sobre mim e meu histórico profissional</span>
    </div>
    <p class="mt-4"> 
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tellus quam, ultricies vitae felis eu, euismod sagittis tellus. Duis vel vestibulum purus,consectetur adipiscing elit. Quisque tellus quam, ultricies vitae  consequat tristique lectus. Curabitur eget tortor orci. Integer ex magna, ullamcorper quis hendrerit ornare, ultricies sed arcu.  
    </p>
    <h3>Curriculum resumido</h3>
    <div class="d-flex">
        <div class="col-7">
            <ul class="pl-1">
                <li class="m-2">Lorem Ipsum ddolor sit amet, consectetur olor sit amet, consectetur adipiscing elit. Quisque tellus quam, ultricies vitae </li>
                <li class="m-2">Lorem Ipsum dolor sit amet, consectetur adolor sit amet, consectetur dipiscing elit. Quisque tellus quam, ultricies vitae </li>
                <li class="m-2">Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Quisque tellus quam, ultricies vitae </li>
                <li class="m-2">Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Quisque telldolor sit amet, consectetur us quam, ultricies vitae </li>
                <li class="m-2">Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Quisque tellus quam, ultricies vitae </li>
                <li class="m-2">Saiba mais - <a href="#">Curriculum Lattes</a> </li>
            </ul>
        </div>

        <div class="col-4 text-right">
            <img class="img-fluid" src="http://res.cloudinary.com/vivala/image/upload/q_auto/v1534378650/Jussara-Leopaci/2k2SE9d.png" alt="Foto Jussara Leopaci">
            <p>Jussara Leopaci - Psicológa clínica</p>
        </div>
    </div>


</section>

<section id="Atuacao">
    <h2>Atuação</h2>
</section>

<section id="Contato">
    <h2>Contato</h2>
</section>

<section id="Footer">
    <h2>Footer</h2>
</section>

@endsection
