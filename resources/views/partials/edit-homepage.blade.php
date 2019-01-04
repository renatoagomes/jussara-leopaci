
<div class="col-xs-12 text-center">
    @if (isset($Homepage) && $Homepage->linkFotoSlider)
        {!! Form::label('fotoListagem', 'Foto de fundo do slider de frases:') !!}<br>
        <img id="foto-listagem" src="{{$Homepage->linkFotoSlider}}" alt="Foto do slider"/>
    @else
        <strong>Adicione uma foto utilizando o botão abaixo. </strong>
    @endif
</div>

<!-- Foto da listagem Field -->
<div class="col-xs-12 text-center" style="padding-top:2rem;">
    @include('fotos.partials.fields', [
        'label' => 'Foto de perfil:',
        'extraAttrs' => [
            'class' =>  'btn btn-primary btn-lg',
            'style' =>  'display:inline;' 
        ],
        'comCropper' => true,
        'aspectRatio' => 1,
        'formID' => '#form-geral',
        'previewID' => '#foto-listagem'
    ])
</div>


<div class="col-xs-12"> <hr> </div>


<div class="col-xs-12">
    {!! Form::label('frases_slider', 'Frases do slider') !!}<br>

</div>

