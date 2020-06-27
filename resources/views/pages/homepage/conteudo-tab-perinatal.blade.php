<h3 class="mt-5">{{ $Homepage->titulo_aba_perinatal_atuacao }}</h3>

<p class="citacao mt-4">{{ $Homepage->intro_aba_perinatal_atuacao }}</p>

<hr class="mt-4 mb-4">

<div class="d-flex row">
    <div class="col-lg-5 col-md-12">
        <div class="row container-img-portrait">
            <div class="col-6">
                <img class="img-fluid" title="Foto perinatalidade" src="{{ $Homepage->linkFotoAtuacaoPer1 }}" alt="">
            </div>
            <div class="col-6">
                <img class="img-fluid" title="Foto perinatalidade" src="{{ $Homepage->linkFotoAtuacaoPer2 }}" alt="">

            </div>
        </div>
        <div class="row mt-3 container-img-landscape">
            <div class="col-12">
                <img class="img-fluid" title="Foto perinatalidade" src="{{ $Homepage->linkFotoAtuacaoPer3 }}" alt="">
            </div>
        </div>
    </div>

    <div class="col-lg-7 col-md-12  mt-3">
        <p> {!! nl2br($Homepage->texto_aba_perinatal_atuacao) !!} </p>

        @if ($Homepage->link_aba_perinatal_atuacao)
            <a href="{{$Homepage->link_aba_perinatal_atuacao}}">SAIBA MAIS</a>
        @endif
    </div>

</div>

