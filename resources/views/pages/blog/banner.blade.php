<section id="header-blog" style="background-image: url({{$Blog->linkFotoCapa}});">
    {{-- Incluindo o menu principal --}}
    @include ('partials.nav-principal', [
        'active' => 'blog'
    ])

    <div>
        <div class="container">
            <div class="container-texto ">
                <h2>Blog</h2>
            </div>
        </div>
    </div>
</section>
