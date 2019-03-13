
<h3>Foto da direita</h3>
<br>
@if (isset($Homepage) && $Homepage->linkFotoApresentacao)
    <img id="foto-apresentacao" class="img-responsive" src="{{$Homepage->linkFotoApresentacao}}" alt=""/>
@else
    <div class="text-center col-xs-12">
        <strong>Adicione uma foto utilizando o botão abaixo. </strong>
    </div>
@endif
<div class="col-xs-12"> &nbsp; </div>


{!! Form::open(['route' => 'homepage.trocaFotoApresentacao', 'files' => true, 'id' => 'form-foto-apresentacao']) !!}

@include('fotos.partials.fields', [
    'extraAttrs' => [
        'class' =>  'btn btn-info btn-xs',
        'style' =>  'display:inline;'

    ],
    'comCropper' => true,
    'aspectRatio' => 0.7,
    'formID' => '#form-foto-apresentacao',
    'previewID' => '#foto-apresentacao'
])


{!! Form::close() !!}
