
<h3>Curriculum</h3>
<br>
<div class="linha-modelo hide">
    <div class="col-xs-11">
        {!! form::label('frase', 'Item da lista') !!}<br>
        {!! form::textarea('frases_slider[citacao][]', null, ['class' => 'form-control', 'rows' => 2]) !!}<br>
    </div>
    <div class="col-xs-1">
        <div class='btn-group'>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirCitacao', 'style' => 'margin-top:4rem' ]) !!}
        </div>
    </div>
    <div class="col-xs-12"> <hr> </div>
</div>

<div class="container-linhas">
    <div class="linha">
        <div class="col-xs-11">
            {!! form::label('frase', 'Item da lista') !!}<br>
            {!! form::textarea('frases_slider[citacao][]', null, ['class' => 'form-control', 'rows' => 2]) !!}<br>
        </div>
        <div class="col-xs-1">
            <div class='btn-group'>
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirCitacao', 'style' => 'margin-top:4rem' ]) !!}
            </div>
        </div>
        <div class="col-xs-12"> <hr> </div>
    </div>
</div>

<div class="col-xs-6">
    {!! Form::button('<i class="glyphicon glyphicon-plus"></i> &nbsp; <strong>Nova citação</strong>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs form-control btnAdicionarCitacao']) !!}
</div>
<div class="col-xs-6">
    {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control btnAdicionarCitacao']) !!}
</div>

