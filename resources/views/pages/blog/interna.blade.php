<section id="conteudo-post" class="container mt-5">

        <div class="row mx-auto">

            <div class="col-12 mt-3">
                <a class="voltar" href="/blog">< Voltar</a>
            </div>

            <div class="col-12 post-header mt-3">
                <h1 class="mb-3">{{ $Post->titulo }} </h1>
                <p class="data mt-2">{{ $Post->dataPublicacaoFormatada }} - {{ $Post->autor }}
                <span class="pull-right">
                    <a href="javascript:void(0);" onclick="sharePost()" target="_blank">
                        <i class="fa fa-share-alt"></i>
                    </a>
                </span>
                </p>
            </div>

            <div class="col-12">
                <img class="w-100" src="{{ $Post->linkFotoCapa }}" alt="">
            </div>

            <div class="post-body col-12 pt-4">

                {!! $Post->conteudo !!}

                <hr class="mt-5">
                @foreach ($Post->referencias as $Referencia)
                    <a id="rodape" href="#"></a>
                    <p class="rodape-abnt">{{$Referencia->texto}} <a target="_blank" href="{{$Referencia->link}}">{{$Referencia->link}}</a> </p>
                @endforeach

            </div>

            <div class="post-footer col-12 text-right">
                <a href="javascript:void(0);" onclick="sharePost()" target="_blank">
                    <i class="fa fa-share-alt"></i>
                </a>
            </div>

        </div>
</section>
