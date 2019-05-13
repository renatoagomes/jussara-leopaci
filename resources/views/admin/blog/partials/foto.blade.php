<div class="col-xs-12">
    <div class="col-xs-12 ">
        @if (isset($Blog) && $Blog->fotoCapa)
            <img id="foto-blog" class="img-responsive" src="{{$Blog->linkFotoCapa}}" />
        @else
            <div class="text-center col-xs-12">
                <strong>Adicione uma foto utilizando o botão abaixo. </strong>
            </div>
        @endif
    </div>

    <!-- Foto da listagem Field -->
    <div class="col-xs-12 text-center" style="padding-top:2rem;">
        {!! Form::open(['route' => 'blog.trocaFotoCapa', 'files' => true, 'id' => 'form-foto-blog']) !!}

        @include('fotos.partials.fields', [
            'extraAttrs' => [
                'class' =>  'btn btn-info btn-xs',
                'style' =>  'display:inline;'

            ],
            'comCropper' => true,
            'aspectRatio' => 3.1,
            'formID' => '#form-foto-blog',
            'previewID' => '#foto-blog'
        ])


        {!! Form::close() !!}
    </div>
</div>
