<h3>Citações</h3>
<br>

<div class="linha-modelo-citacao hide">
    <div class="col-xs-7">
        {!! form::label('frase', 'Citação') !!}<br>
        {!! form::text('frases_slider[citacao][]', null, ['class' => 'form-control']) !!}<br>
    </div>

    <div class="col-xs-2">
        {!! Form::label('frase', 'Autor / Ano') !!}<br>
        {!! Form::text('frases_slider[autor_ano][]', null, ['class' => 'form-control']) !!}<br>
    </div>

    <div class="col-xs-3">
        {!! Form::label('tempo', 'Duração') !!}<br>
        {!! Form::number('frases_slider[tempo][]', null, ['style' => 'width:80px;', 'class'=>'form-control inline', 'step' => 0.5, 'min'=>'1']) !!} &nbsp; segundos

        <div class='btn-group pull-right'>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirCitacao' ]) !!}
        </div>
    </div>

    <div class="col-xs-12"> <hr> </div>

</div>

{!! Form::open(['route' => 'homepage.atualizaCitacoes']) !!}

<div class="container-linhas-citacao">

    @forelse ($Homepage->objCitacoes as $citacao)
        <div class="linha">
            <div class="col-xs-7">
                {!! form::label('frase', 'Citação') !!}<br>
                {!! form::text('frases_slider[citacao][]', $citacao->frase, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-2">
                {!! Form::label('frase', 'Autor / Ano') !!}<br>
                {!! Form::text('frases_slider[autor_ano][]', $citacao->autor, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-3">
                {!! Form::label('tempo', 'Duração') !!}<br>
                {!! Form::number('frases_slider[tempo][]', $citacao->duracao, ['style' => 'width:80px;', 'class'=>'form-control inline', 'step' => 0.5, 'min'=>'1']) !!} &nbsp; segundos

                <div class='btn-group pull-right'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirCitacao']) !!}
                </div>
            </div>
            <div class="col-xs-12"> <hr> </div>
        </div>
    @empty
        <div class="linha">
            <div class="col-xs-7">
                {!! form::label('frase', 'Citação') !!}<br>
                {!! form::text('frases_slider[citacao][]', null, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-2">
                {!! Form::label('frase', 'Autor / Ano') !!}<br>
                {!! Form::text('frases_slider[autor_ano][]', null, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-3">
                {!! Form::label('tempo', 'Duração') !!}<br>
                {!! Form::number('frases_slider[tempo][]', null, ['style' => 'width:80px;', 'class'=>'form-control inline', 'step' => 0.5, 'min'=>'1']) !!} &nbsp; segundos

                <div class='btn-group pull-right'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirCitacao']) !!}
                </div>
            </div>
            <div class="col-xs-12"> <hr> </div>
        </div>
    @endforelse


</div>

<div class="col-xs-6">
    {!! Form::button('<i class="glyphicon glyphicon-plus"></i> &nbsp; <strong>Nova citação</strong>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs form-control btnAdicionarCitacao']) !!}
</div>
<div class="col-xs-6">
    {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control btnSalvarCitacao']) !!}
</div>


{!! Form::close() !!}
