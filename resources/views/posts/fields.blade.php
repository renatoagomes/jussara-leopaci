<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

@if (\Route::is('*edit*'))

    <!-- Slug Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('slug', 'Endereço do post:') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-xs-2">&nbsp;</div>
    <div class="col-xs-8">
        <img id="foto-capa" class="img-responsive" src="{{$post->linkFotoCapa}}" />
    </div>
    <div class="col-xs-2">&nbsp;</div>

    <!-- Foto da listagem Field -->
    <div class="col-xs-12 text-center" style="padding-top:2rem;">

        @include('fotos.partials.fields', [
            'extraAttrs' => [
                'class' =>  'btn btn-info btn-xs',
                'style' =>  'display:inline;'

            ],
            'comCropper' => true,
            'aspectRatio' => 2,
            'formID' => '#form-post',
            'previewID' => '#foto-capa'
        ])

    </div>


    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('conteudo', 'Conteudo:') !!}
        {!! Form::textarea('conteudo', null, ['class' => 'form-control summernote', 'id' => 'summernote', 'rows' => 4]) !!}
    </div>

@else

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Proximo', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@endif
