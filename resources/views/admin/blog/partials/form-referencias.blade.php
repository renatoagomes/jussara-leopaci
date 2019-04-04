<div class="linha-modelo-referencia hide">
    <div class="col-xs-6">
        {!! form::label('texto', 'Texto da ref.') !!}<br>
        {!! form::text('referencias[texto][]', null, ['class' => 'form-control', 'disabled']) !!}<br>
    </div>

    <div class="col-xs-4">
        {!! Form::label('link', 'Link de destino') !!}<br>
        {!! Form::text('referencias[link][]', null, ['class' => 'form-control', 'disabled']) !!}<br>
    </div>

    <div class="col-xs-2">
        <div class='btn-group' style="margin-top:3rem">
            <div class="col-xs-6">
                {!! Form::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs btnAdicionarReferencia']) !!}
            </div>
            <div class="col-xs-6">
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirReferencia' ]) !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12"> <hr> </div>

</div>

<div class="container-linhas-referencia">

    @forelse ($post->referencias as $referencia)
        <div class="linha">
            <div class="col-xs-6">
                {!! form::label('texto', 'Texto da ref.') !!}<br>
                {!! form::text('referencias[texto][]', $referencia->texto, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-4">
                {!! Form::label('link', 'Link de destino') !!}<br>
                {!! Form::text('referencias[link][]', $referencia->link, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-2">
                <div class='btn-group' style="margin-top:3rem">
                    <div class="col-xs-6">
                    {!! Form::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs btnAdicionarReferencia']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirReferencia' ]) !!}
                    </div>
                </div>
            </div>

            <div class="col-xs-12"> <hr> </div>
        </div>
    @empty
        <div class="linha">
            <div class="col-xs-6">
                {!! form::label('texto', 'Texto da ref.') !!}<br>
                {!! form::text('referencias[texto][]', null, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-4">
                {!! Form::label('link', 'Link de destino') !!}<br>
                {!! Form::text('referencias[link][]', null, ['class' => 'form-control']) !!}<br>
            </div>

            <div class="col-xs-2">
                <div class='btn-group' style="margin-top:3rem">
                    <div class="col-xs-6">
                        {!! Form::button('<i class="glyphicon glyphicon-plus"></i>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs btnAdicionarReferencia']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs btnExcluirReferencia' ]) !!}
                    </div>
                </div>
            </div>

            <div class="col-xs-12"> <hr> </div>

        </div>
    @endforelse


</div>



