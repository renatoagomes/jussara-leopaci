{{ Form::model($Homepage, ['route' => 'homepage.update'])}}

<br>

<div class="form-group col-sm-6">
    {!! Form::label('titulo_aba_psic_atuacao', 'Título:') !!}
    {{ Form::text('titulo_aba_psic_atuacao', $Homepage->titulo_aba_psic_atuacao, ['class' => 'form-control']) }}
</div>

<div class="col-xs-6">&nbsp;</div>

<div class="form-group col-sm-12">
    {!! Form::label('titulo_aba_psic_atuacao', 'Introdução:') !!}
    {{ Form::textarea('intro_aba_psic_atuacao', $Homepage->intro_aba_psic_atuacao, ['class' => 'form-control', 'rows' => 2]) }}
</div>

<div class="col-xs-12">
    <div class="col-xs-6">
        {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control btnSalvarCitacao']) !!}
    </div>
</div>


{{ Form::close() }}


<hr class="col-xs-12" style="margin-top:3rem; margin-bottom:3rem;">

<div class="d-flex row">
    <div class="col-lg-6 col-md-12">
        <div class="row container-img-portrait">
            <div class="col-sm-6">
                <img class="img-fluid" src="http://res.cloudinary.com/tesseract/image/upload/c_scale,h_500,q_auto/v1535989139/jussara/Cl%C3%ADnica_Psicanal%C3%ADtica_1.jpg" alt="">
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="http://res.cloudinary.com/tesseract/image/upload/c_scale,h_500,q_auto/v1536107794/Cl%C3%ADnica_Psicanal%C3%ADtica_3_b0u2vf.jpg" alt="">

            </div>
        </div>
        <div class="row mt-3 container-img-landscape">
            <div class="col-sm-12">
                <img class="img-fluid" src="http://res.cloudinary.com/tesseract/image/upload/c_scale,q_auto,w_800/v1535989146/jussara/Cl%C3%ADnica_Psicanal%C3%ADtica_2.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-12  mt-3">

        {{ Form::model($Homepage, ['route' => 'homepage.update'])}}
        <div class="form-group col-sm-12">
            {!! Form::label('texto_aba_psic_atuacao', 'Texto interno:') !!}
            {!! Form::textarea('texto_aba_psic_atuacao', $Homepage->texto_aba_psic_atuacao, ['class' => 'form-control', 'rows' => 15]) !!}
        </div>
        <div class="form-group col-sm-12">
            {!! Form::label('link_aba_psic_atuacao', "Link 'Saiba Mais':") !!}
            {!! Form::text('link_aba_psic_atuacao', $Homepage->link_aba_psic_atuacao, ['class' => 'form-control']) !!}
        </div>

        <div class="col-xs-12">
            {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control btnSalvarCitacao']) !!}
        </div>

        {{ Form::close() }}
    </div>

</div>

