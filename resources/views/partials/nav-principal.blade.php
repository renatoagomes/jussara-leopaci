{{-- Menu Desktop md+ --}}
@if (\Agent::isDesktop())
<div class="container">
    <nav id="menu-principal" class="w-100 navbar navbar-expand-lg navbar-light align-items-start">
        <img class="img-fluid" src="/logo.png" alt="Logo Jussara Leopaci"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex justify-content-between align-items-center">
                <a class="nav-item nav-link @if(isset($active) && $active == 'home') active @endif" href="/">Home</a> 
                <a class="nav-item nav-link" href="/#apresentacao">Apresentação</a> 
                <a class="nav-item nav-link" href="/#atuacao">Atuação</a> 
                <a class="nav-item nav-link @if(isset($active) && $active == 'perinatal') active @endif" href="/perinatal">Perinatal</a> 
                <a class="nav-item nav-link" href="/#contato">Contato</a> 
                <a class="nav-item nav-link  @if(isset($active) && $active == 'blog') active @endif" href="/blog">Blog</a> 
            </div>
        </div>
    </nav>
</div>

@else

{{-- Menu Mobile md- --}}
<nav id="menu-principal" class="w-100 navbar navbar-expand-lg navbar-light justify-content-end p-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link @if(isset($active) && $active == 'home') active @endif" href="/">Home</a> 
            <a class="nav-item nav-link" href="/#apresentacao">Apresentação</a> 
            <a class="nav-item nax-link" href="/#atuacao">Atuação</a> 
            <a class="nav-item nav-link @if(isset($active) && $active == 'perinatal') active @endif" href="/perinatal">Perinatal</a> 
            <a class="nav-item nav-link" href="/#contato">Contato</a> 
        </div>
    </div>
</nav>

@endif
