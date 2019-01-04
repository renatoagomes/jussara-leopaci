
<div class="box box-primary">
    <div class="box-header with-border ">
        <h2 class="box-title">Slider de citações</h2>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="col-xs-12 ">
            <h3>Foto de fundo</h3>
            <br>
            @if (isset($Homepage) && $Homepage->linkFotoSlider)
                <img id="foto-slider" class="img-responsive" src="{{$Homepage->linkFotoSlider}}" alt="Foto do slider"/>
            @else
                <div class="text-center col-xs-12">
                    <strong>Adicione uma foto utilizando o botão abaixo. </strong>
                </div>
            @endif
        </div>

        <!-- Foto da listagem Field -->
        <div class="col-xs-12 text-center" style="padding-top:2rem;">
            @include('fotos.partials.fields', [
                'label' => 'Foto de perfil:',
                'extraAttrs' => [
                    'class' =>  'btn btn-info btn-lg',
                    'style' =>  'display:inline;' 
                ],
                'comCropper' => true,
                'aspectRatio' => 1,
                'formID' => '#form-geral',
                'previewID' => '#foto-listagem'
            ])
        </div>


        <div class="col-xs-12"> <hr> </div>


        <div class="col-xs-12">
            <h3>Citações</h3>
            <br>

            <div class="linha-modelo hide">
                <div class="col-xs-5">
                    {!! form::label('frase', 'Citação') !!}<br>
                    {!! form::text('frases_slider[citacao][]', null, ['class' => 'form-control']) !!}<br>
                </div>

                <div class="col-xs-3">
                    {!! Form::label('frase', 'Autor') !!}<br>
                    {!! Form::text('frases_slider[frases][]', null, ['class' => 'form-control']) !!}<br>
                </div>

                <div class="col-xs-1">
                    {!! Form::label('frase', 'Ano') !!}<br>
                    {!! Form::text('frases_slider[frases][]', null, ['class' => 'form-control']) !!}<br>
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

            <div class="container-linhas">
                <div class="linha">
                    <div class="col-xs-5">
                        {!! form::label('frase', 'Citação') !!}<br>
                        {!! form::text('frases_slider[citacao][]', null, ['class' => 'form-control']) !!}<br>
                    </div>

                    <div class="col-xs-3">
                        {!! Form::label('frase', 'Autor') !!}<br>
                        {!! Form::text('frases_slider[frases][]', null, ['class' => 'form-control']) !!}<br>
                    </div>

                    <div class="col-xs-1">
                        {!! Form::label('frase', 'Ano') !!}<br>
                        {!! Form::text('frases_slider[frases][]', null, ['class' => 'form-control']) !!}<br>
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
            </div>

            <div class="col-xs-6">
                {!! Form::button('<i class="glyphicon glyphicon-plus"></i> &nbsp; <strong>Nova citação</strong>', ['type' => 'submit', 'class' => 'btn btn-success btn-xs form-control btnAdicionarCitacao']) !!}
            </div>
            <div class="col-xs-6">
                {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control btnAdicionarCitacao']) !!}
            </div>
        </div>

    </div><!-- /.box-body -->
</div><!-- /.box -->
