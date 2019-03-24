{{ Form::model($Homepage, ['route' => 'homepage.update'])}}

<br>

<div class="form-group col-sm-6">
    {!! Form::label('titulo_aba_eventos_atuacao', 'Título:') !!}
    {{ Form::text('titulo_aba_eventos_atuacao', $Homepage->titulo_aba_eventos_atuacao, ['class' => 'form-control']) }}
</div>

<div class="col-xs-6">&nbsp;</div>

<div class="form-group col-sm-12">
    {!! Form::label('titulo_aba_eventos_atuacao', 'Introdução:') !!}
    {{ Form::textarea('intro_aba_eventos_atuacao', $Homepage->intro_aba_eventos_atuacao, ['class' => 'form-control', 'rows' => 2]) }}
</div>

<div class="col-xs-12">
    <div class="col-xs-6">
        {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control ']) !!}
    </div>
</div>


{{ Form::close() }}


<hr class="col-xs-12" style="margin-top:3rem; margin-bottom:3rem;">

<div class="d-flex row">
    <div class="col-lg-6 col-md-12">
        <div class="row mt-3 container-img-landscape">
            <div class="col-sm-12">
                <img id="foto-atuacao-eventos-1" class="img-responsive" src="{{ $Homepage->linkFotoAtuacaoEve1}}" alt="" style="margin-bottom:1rem;">

                {!! Form::open(['route' => 'homepage.trocaFotoAtuacao', 'files' => true, 'id' => 'form-foto-atuacao-eventos-1']) !!}
                    {{ Form::hidden('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_1) }}
                    @include('fotos.partials.fields', [
                        'extraAttrs' => [
                            'class' =>  'btn btn-info btn-xs',
                            'style' =>  'display:inline;'
                        ],
                        'comCropper' => true,
                        'aspectRatio' => 1.33,
                        'formID' => '#form-foto-atuacao-eventos-1',
                        'previewID' => '#foto-atuacao-eventos-1'
                    ])
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row mt-2 container-img-portrait">
            <div class="col-sm-6">

                <img id="foto-atuacao-eventos-2" class="img-responsive" src="{{ $Homepage->linkFotoAtuacaoEve2}}" alt="" style="margin-bottom:1rem;">

                {!! Form::open(['route' => 'homepage.trocaFotoAtuacao', 'files' => true, 'id' => 'form-foto-atuacao-eventos-1']) !!}
                    {{ Form::hidden('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_2) }}
                    @include('fotos.partials.fields', [
                        'extraAttrs' => [
                            'class' =>  'btn btn-info btn-xs',
                            'style' =>  'display:inline;'
                        ],
                        'comCropper' => true,
                        'aspectRatio' => 0.83,
                        'formID' => '#form-foto-atuacao-eventos-2',
                        'previewID' => '#foto-atuacao-eventos-2'
                    ])
                {!! Form::close() !!}

            </div>
            <div class="col-sm-6">
                <img id="foto-atuacao-eventos-3" class="img-responsive" src="{{ $Homepage->linkFotoAtuacaoEve3}}" alt="" style="margin-bottom:1rem;">

                {!! Form::open(['route' => 'homepage.trocaFotoAtuacao', 'files' => true, 'id' => 'form-foto-atuacao-eventos-3']) !!}
                    {{ Form::hidden('tipo', \App\Models\Foto::TIPO_HOME_ATUACAO_EVE_3) }}
                    @include('fotos.partials.fields', [
                        'extraAttrs' => [
                            'class' =>  'btn btn-info btn-xs',
                            'style' =>  'display:inline;'
                        ],
                        'comCropper' => true,
                        'aspectRatio' => 0.83,
                        'formID' => '#form-foto-atuacao-eventos-3',
                        'previewID' => '#foto-atuacao-eventos-3'
                    ])
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12  mt-3">

        {{ Form::model($Homepage, ['route' => 'homepage.update'])}}
        <div class="form-group col-sm-12">
            {!! Form::label('texto_aba_eventos_atuacao', 'Texto interno:') !!}
            {!! Form::textarea('texto_aba_eventos_atuacao', $Homepage->texto_aba_eventos_atuacao, ['class' => 'form-control', 'rows' => 15]) !!}
        </div>
        <div class="form-group col-sm-12">
            {!! Form::label('link_aba_eventos_atuacao', "Link 'Saiba Mais':") !!}
            {!! Form::text('link_aba_eventos_atuacao', $Homepage->link_aba_eventos_atuacao, ['class' => 'form-control']) !!}
        </div>

        <div class="col-xs-12">
            {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control ']) !!}
        </div>

        {{ Form::close() }}
    </div>

</div>

