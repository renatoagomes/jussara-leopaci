<div class="col-xs-12">
    <div class="col-xs-12 ">
        <h3>Foto de fundo</h3>
        <br>
        @if (isset($Homepage) && $Homepage->linkFotoSlider)
            <img id="foto-slider" class="img-responsive" src="{{$Homepage->linkFotoSlider}}" alt="Foto do slider"/>
        @else
            <div class="text-center col-xs-12">
                <strong>Adicione uma foto utilizando o botão abaixo. </strong>
            </div>
        @endif
    </div>

    <!-- Foto da listagem Field -->
    <div class="col-xs-12 text-center" style="padding-top:2rem;">
        {!! Form::open(['route' => 'homepage.trocaFotoFundo', 'files' => true]) !!}

        @include('fotos.partials.fields', [
            'extraAttrs' => [
                'class' =>  'btn btn-info btn-xs',
                'style' =>  'display:inline;'

            ],
            'comCropper' => true,
            'aspectRatio' => 1,
            'formID' => '#form-geral',
            'previewID' => '#foto-listagem'
        ])


        {!! Form::close() !!}
    </div>
</div>
