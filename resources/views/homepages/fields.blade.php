<!-- Frases Slider Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frases_slider', 'Frases Slider:') !!}
    {!! Form::text('frases_slider', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Apresentacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_apresentacao', 'Titulo Apresentacao:') !!}
    {!! Form::text('titulo_apresentacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Apresentacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitulo_apresentacao', 'Subtitulo Apresentacao:') !!}
    {!! Form::text('subtitulo_apresentacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Apresentacao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_apresentacao', 'Texto Apresentacao:') !!}
    {!! Form::textarea('texto_apresentacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Curriculum Json Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('curriculum_json', 'Curriculum Json:') !!}
    {!! Form::textarea('curriculum_json', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Curriculum Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('link_curriculum', 'Link Curriculum:') !!}
    {!! Form::textarea('link_curriculum', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_atuacao', 'Titulo Atuacao:') !!}
    {!! Form::text('titulo_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Aba Psic Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_aba_psic_atuacao', 'Titulo Aba Psic Atuacao:') !!}
    {!! Form::text('titulo_aba_psic_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Aba Psic Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intro_aba_psic_atuacao', 'Intro Aba Psic Atuacao:') !!}
    {!! Form::text('intro_aba_psic_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Aba Psic Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_aba_psic_atuacao', 'Texto Aba Psic Atuacao:') !!}
    {!! Form::text('texto_aba_psic_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Aba Social Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_aba_social_atuacao', 'Titulo Aba Social Atuacao:') !!}
    {!! Form::text('titulo_aba_social_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Aba Social Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intro_aba_social_atuacao', 'Intro Aba Social Atuacao:') !!}
    {!! Form::text('intro_aba_social_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Aba Social Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_aba_social_atuacao', 'Texto Aba Social Atuacao:') !!}
    {!! Form::text('texto_aba_social_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Aba Perinatal Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_aba_perinatal_atuacao', 'Titulo Aba Perinatal Atuacao:') !!}
    {!! Form::text('titulo_aba_perinatal_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Aba Perinatal Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intro_aba_perinatal_atuacao', 'Intro Aba Perinatal Atuacao:') !!}
    {!! Form::text('intro_aba_perinatal_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Aba Perinatal Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_aba_perinatal_atuacao', 'Texto Aba Perinatal Atuacao:') !!}
    {!! Form::text('texto_aba_perinatal_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Aba Eventos Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_aba_eventos_atuacao', 'Titulo Aba Eventos Atuacao:') !!}
    {!! Form::text('titulo_aba_eventos_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Aba Eventos Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intro_aba_eventos_atuacao', 'Intro Aba Eventos Atuacao:') !!}
    {!! Form::text('intro_aba_eventos_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Aba Eventos Atuacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('texto_aba_eventos_atuacao', 'Texto Aba Eventos Atuacao:') !!}
    {!! Form::text('texto_aba_eventos_atuacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('homepages.index') !!}" class="btn btn-default">Cancel</a>
</div>
