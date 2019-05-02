<section id="lista-posts">
    <div class="container">

        <div class="row mx-auto container-cards">
            @foreach(\App\Models\Post::publicados()->orderBy('data_publicacao', 'desc')->get() as $post)
                <div class="post-card card">

                    <div class="card-header">
                        <a href="/blog/{{ $post->slug }}" class="titulo">
                            <h3 class="">{{$post->titulo}} </h3>
                        </a>
                    </div>

                    <img class="img-responsive" src="{{ $post->capa_url }}" alt="capa do post {{$post->titulo}}">

                    <div class="card-body">
                        <p>
                        {{ $post->preview_post ? $post->preview_post : $post->preview }} ... <a href="/blog/{{ $post->slug }}"><strong>[leia mais]</strong> </a>
                        </p>
                    </div>

                    <div class="card-footer w-100 text-right pt-0 pb-1">

                        <p class="rodape-post-card">{{ $post->dataPublicacaoFormatada }} - {{$post->autor}}</p>
                        <a href="javascript:void(0)" onclick="sharePost('/blog/{{ $post->slug }}')" target="_blank">
                        <i class="fa fa-share-alt"></i>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
