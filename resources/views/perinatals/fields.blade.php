<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Referencias Json Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referencias_json', 'Referencias Json:') !!}
    {!! Form::text('referencias_json', null, ['class' => 'form-control']) !!}
</div>

<!-- Cor Secao 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cor_secao_1', 'Cor Secao 1:') !!}
    {!! Form::text('cor_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Secao 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_secao_1', 'Titulo Secao 1:') !!}
    {!! Form::text('titulo_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Secao 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitulo_secao_1', 'Subtitulo Secao 1:') !!}
    {!! Form::text('subtitulo_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Secao 1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo_secao_1', 'Conteudo Secao 1:') !!}
    {!! Form::textarea('conteudo_secao_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Cor Secao 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cor_secao_2', 'Cor Secao 2:') !!}
    {!! Form::text('cor_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Secao 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_secao_2', 'Titulo Secao 2:') !!}
    {!! Form::text('titulo_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Secao 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitulo_secao_2', 'Subtitulo Secao 2:') !!}
    {!! Form::text('subtitulo_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Secao 2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo_secao_2', 'Conteudo Secao 2:') !!}
    {!! Form::textarea('conteudo_secao_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Cor Secao 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cor_secao_3', 'Cor Secao 3:') !!}
    {!! Form::text('cor_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Secao 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_secao_3', 'Titulo Secao 3:') !!}
    {!! Form::text('titulo_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Secao 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitulo_secao_3', 'Subtitulo Secao 3:') !!}
    {!! Form::text('subtitulo_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Conteudo Secao 3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('conteudo_secao_3', 'Conteudo Secao 3:') !!}
    {!! Form::textarea('conteudo_secao_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('perinatals.index') !!}" class="btn btn-default">Cancel</a>
</div>
