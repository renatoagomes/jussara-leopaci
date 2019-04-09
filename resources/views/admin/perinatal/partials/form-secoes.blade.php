
@forelse ($perinatal->secoes as $secao)

    @include ('secao_perinatals.fields', ['secaoPerinatals' => $secao])


@empty


    <div class="col-xs-12">
        <div class='btn-group' style="margin-top:3rem">
            <div class="col-xs-6">
                {!! Form::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs btnAdicionarReferencia']) !!}
            </div>
            <div class="col-xs-6">
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirReferencia' ]) !!}
            </div>
        </div>
    </div>

@endforelse


