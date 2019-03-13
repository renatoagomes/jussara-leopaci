<div class="col-xs-12">
    <div class="col-xs-12 ">
        @if (isset($Homepage) && $Homepage->fotoFundo)
            <img id="foto-slider" class="img-responsive" src="{{$Homepage->linkFotoFundo}}" />
        @else
            <div class="text-center col-xs-12">
                <strong>Adicione uma foto utilizando o botão abaixo. </strong>
            </div>
        @endif
    </div>

    <!-- Foto da listagem Field -->
    <div class="col-xs-12 text-center" style="padding-top:2rem;">
        {!! Form::open(['route' => 'homepage.trocaFotoFundo', 'files' => true, 'id' => 'form-foto-homepage']) !!}

        @include('fotos.partials.fields', [
            'extraAttrs' => [
                'class' =>  'btn btn-info btn-xs',
                'style' =>  'display:inline;'

            ],
            'comCropper' => true,
            'aspectRatio' => 2,
            'formID' => '#form-foto-homepage',
            'previewID' => '#foto-slider'
        ])


        {!! Form::close() !!}
    </div>
</div>
