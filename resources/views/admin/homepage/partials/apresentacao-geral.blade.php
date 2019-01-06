<div class="col-sm-12 text-center">
    <div class="col-sm-4"></div>
    <!-- Titulo Apresentacao Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('titulo_apresentacao', 'Titulo') !!}
        {!! Form::text('titulo_apresentacao', null, ['class' => 'form-control text-center']) !!}
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="col-sm-12 text-center">
    <div class="col-sm-3"></div>
    <!-- Subtitulo Apresentacao Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('subtitulo_apresentacao', 'Subtitulo') !!}
        {!! Form::text('subtitulo_apresentacao', null, ['class' => 'form-control text-center']) !!}
    </div>
    <div class="col-sm-3"></div>
</div>
<!-- Texto Apresentacao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_apresentacao', 'Texto Apresentacao:') !!}
    {!! Form::textarea('texto_apresentacao', null, ['class' => 'form-control', 'rows' => 3]) !!}
</div>
