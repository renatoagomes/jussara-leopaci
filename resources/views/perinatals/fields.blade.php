<!-- Titulo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>


<div class="col-xs-2">&nbsp;</div>
<div class="col-xs-8">
    <img id="foto-capa" class="img-responsive" src="{{$perinatal->linkFotoCapa}}" />
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
        'formID' => '#form-perinatal',
        'previewID' => '#foto-capa'
    ])

</div>

<div class="col-xs-12"><hr></div>

<!-- Cor Secao 1 Field -->
<div class="form-group col-sm-2">
    {!! Form::label('cor_secao_1', 'Cor Secao 1:') !!}
    {!! Form::input('color', 'cor_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Secao 1 Field -->
<div class="form-group col-sm-5">
    {!! Form::label('titulo_secao_1', 'Titulo Secao 1:') !!}
    {!! Form::text('titulo_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Secao 1 Field -->
<div class="form-group col-sm-5">
    {!! Form::label('subtitulo_secao_1', 'Subtitulo Secao 1:') !!}
    {!! Form::text('subtitulo_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Secao 1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo_secao_1', 'Conteudo Secao 1:') !!}
    {!! Form::textarea('conteudo_secao_1', null, ['class' => 'form-control summernote', 'id' => 'summernote', 'rows' => 4]) !!}
</div>

<div class="col-xs-12"><hr></div>


<!-- Cor Secao 2 Field -->
<div class="form-group col-sm-2">
    {!! Form::label('cor_secao_2', 'Cor Secao 2:') !!}
    {!! Form::input('color', 'cor_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Secao 2 Field -->
<div class="form-group col-sm-5">
    {!! Form::label('titulo_secao_2', 'Titulo Secao 2:') !!}
    {!! Form::text('titulo_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Secao 2 Field -->
<div class="form-group col-sm-5">
    {!! Form::label('subtitulo_secao_2', 'Subtitulo Secao 2:') !!}
    {!! Form::text('subtitulo_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Secao 2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo_secao_2', 'Conteudo Secao 2:') !!}
    {!! Form::textarea('conteudo_secao_2', null, ['class' => 'form-control summernote', 'id' => 'summernote', 'rows' => 4]) !!}
</div>

<div class="col-xs-12"><hr></div>

<!-- Cor Secao 2 Field -->
<div class="form-group col-sm-2">
    {!! Form::label('cor_secao_3', 'Cor Secao 3:') !!}
    {!! Form::input('color', 'cor_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Secao 2 Field -->
<div class="form-group col-sm-5">
    {!! Form::label('titulo_secao_3', 'Titulo Secao 3:') !!}
    {!! Form::text('titulo_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Secao 2 Field -->
<div class="form-group col-sm-5">
    {!! Form::label('subtitulo_secao_3', 'Subtitulo Secao 3:') !!}
    {!! Form::text('subtitulo_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Secao 2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo_secao_3', 'Conteudo Secao 3:') !!}
    {!! Form::textarea('conteudo_secao_3', null, ['class' => 'form-control summernote', 'id' => 'summernote', 'rows' => 4]) !!}
</div>

<div class="col-xs-12"><hr></div>

