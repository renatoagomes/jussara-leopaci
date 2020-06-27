<div class="col-sm-12 text-left">
    <div class="form-group col-sm-4 pl-0">
        {!! Form::label('titulo_apresentacao', 'Título da seção:') !!}
        {!! Form::text('titulo_apresentacao', $Homepage->titulo_apresentacao, ['class' => 'form-control text-left']) !!}
    </div>
</div>
<div class="col-sm-12 text-left">
    <div class="form-group col-sm-6 pl-0">
        {!! Form::label('subtitulo_apresentacao', 'Subtítulo da seção:') !!}
        {!! Form::text('subtitulo_apresentacao', $Homepage->subtitulo_apresentacao, ['class' => 'form-control text-left']) !!}
    </div>
</div>
<div class="col-sm-12 text-left">
    <div class="form-group col-sm-12 pl-0">
        {!! Form::label('texto_apresentacao', 'Texto da seção:') !!}
        {!! Form::textarea('texto_apresentacao', $Homepage->texto_apresentacao, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>
</div>

<div class="col-sm-6">
    <div class="form-group col-sm-12 pl-0">
    {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control']) !!}
    </div>
</div>
