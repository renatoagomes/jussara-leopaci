<br>


<div class="linha-modelo-curriculum hide">
    <div class="col-xs-11">
        {!! form::textarea('curriculum_json[]', null, ['class' => 'form-control', 'rows' => 2]) !!}<br>
    </div>
    <div class="col-xs-1">
        <div class='btn-group'>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirItemCurriculum', 'style' => 'margin-top:4rem' ]) !!}
        </div>
    </div>
</div>

<div class="container-linhas-curriculum">

    @forelse ($Homepage->objListaCurriculum as $item)
        <div class="linha">
            <div class="col-xs-11">
                {!! form::textarea('curriculum_json[]', $item, ['class' => 'form-control', 'rows' => 2]) !!}<br>
            </div>
            <div class="col-xs-1">
                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirItemCurriculum', 'style' => 'margin-top:4rem' ]) !!}
                </div>
            </div>
        </div>
    @empty
        <div class="linha">
            <div class="col-xs-11">
                {!! form::textarea('curriculum_json[]', null, ['class' => 'form-control', 'rows' => 2]) !!}<br>
            </div>
            <div class="col-xs-1">
                <div class='btn-group'>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirItemCurriculum', 'style' => 'margin-top:4rem' ]) !!}
                </div>
            </div>
        </div>
    @endforelse


</div>

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('link_curriculum', "Link do 'Saiba Mais'") !!}
    {!! Form::text('link_curriculum', $Homepage->link_curriculum, ['class' => 'form-control']) !!}
</div>
<br>
<div class="col-xs-6">

    {!! Form::button('<i class="glyphicon glyphicon-plus"></i> &nbsp; <strong>Novo item</strong>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs form-control btnAdicionarItemCurriculum']) !!}
</div>
<div class="col-xs-6">
    {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control']) !!}
</div>

