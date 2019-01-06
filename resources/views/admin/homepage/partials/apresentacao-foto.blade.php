
<h3>Foto da direita</h3>
<br>
@if (isset($Homepage) && $Homepage->linkFotoSlider)
    <img id="foto-slider" class="img-responsive" src="{{$Homepage->linkFotoSlider}}" alt="Foto do slider"/>
@else
    <div class="text-center col-xs-12">
        <strong>Adicione uma foto utilizando o botão abaixo. </strong>
    </div>
@endif
<div class="col-xs-12"> &nbsp; </div>


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
