<section id="atuacao" class="">
    <div class="container">
        <div class="text-center pt-4">
            <span class="detalhe-top sem-respiro">__________</span>
            <h2 class="mt-4 mb-0">{{ $Homepage->titulo_atuacao }}</h2>
        </div>

        <div class="mt-4 text-center d-flex justify-content-center">
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tab-psicanalitica" role="tab" aria-controls="tab-psicanalitica" aria-selected="true" >{{ $Homepage->titulo_aba_psic_atuacao }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-social" role="tab" aria-controls="social" aria-selected="false">{{ $Homepage->titulo_aba_social_atuacao }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-perinatal" role="tab" aria-controls="perinatal" aria-selected="false">{{ $Homepage->titulo_aba_perinatal_atuacao }}</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab-eventos" role="tab" aria-controls="eventos" aria-selected="false">{{ $Homepage->titulo_aba_eventos_atuacao }}</a>
                </li>
            </ul>
        </div>

        <div class="tab-content mx-auto">
            <div class="tab-pane fade show active" id="tab-psicanalitica" role="tabpanel" aria-labelledby="tab-psicanalitica-tab">
                @include('pages.homepage.conteudo-tab-psicanalitica')
            </div>

            <div class="tab-pane fade" id="tab-social" role="tabpanel" aria-labelledby="tab-social-tab">
                @include('pages.homepage.conteudo-tab-social')
            </div>

            <div class="tab-pane fade" id="tab-perinatal" role="tabpanel" aria-labelledby="tab-perinatal-tab">
                @include('pages.homepage.conteudo-tab-perinatal')
            </div>

            <div class="tab-pane fade" id="tab-eventos" role="tabpanel" aria-labelledby="tab-eventos-tab">
                @include('pages.homepage.conteudo-tab-eventos')
            </div>
        </div>

    </div>
</section>


