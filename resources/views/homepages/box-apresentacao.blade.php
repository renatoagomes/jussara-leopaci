
<div class="box box-primary">
    <div class="box-header with-border ">
        <h2 class="box-title">Seção Apresentação</h2>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">


        <div class="col-xs-12">
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
        </div>

        <div class="col-xs-12"> <hr> </div>

        <div class="col-xs-7">
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
        </div>

        <div class="col-xs-5">
            <h3>Foto da direita</h3>
            <br>
            @if (isset($Homepage) && $Homepage->linkFotoSlider)
                <img id="foto-slider" class="img-responsive" src="{{$Homepage->linkFotoSlider}}" alt="Foto do slider"/>
            @else
                <div class="text-center col-xs-12">
                    <strong>Adicione uma foto utilizando o botão abaixo. </strong>
                </div>
            @endif
            <div class="col-xs-12"> &nbsp; </div>

            @include('fotos.partials.fields', [
                'extraAttrs' => [
                    'class' =>  'btn btn-info btn-xs',
                    'style' =>  'display:inline;'

                ],
                'comCropper' => true,
                'aspectRatio' => 1,
                'formID' => '#form-geral',
                'previewID' => '#foto-listagem'
            ])
        </div>

        <div class="col-xs-12">
            <br>
        </div>

        <!-- Link Curriculum Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('link_curriculum', "Link do 'Saiba Mais'") !!}
            {!! Form::text('link_curriculum', null, ['class' => 'form-control']) !!}
        </div>

    </div><!-- /.box-body -->
</div><!-- /.box -->
