<table class="table table-responsive" id="homepages-table">
    <thead>
        <tr>
            <th>Frases Slider</th>
        <th>Titulo Apresentacao</th>
        <th>Subtitulo Apresentacao</th>
        <th>Texto Apresentacao</th>
        <th>Curriculum Json</th>
        <th>Link Curriculum</th>
        <th>Titulo Atuacao</th>
        <th>Titulo Aba Psic Atuacao</th>
        <th>Intro Aba Psic Atuacao</th>
        <th>Texto Aba Psic Atuacao</th>
        <th>Titulo Aba Social Atuacao</th>
        <th>Intro Aba Social Atuacao</th>
        <th>Texto Aba Social Atuacao</th>
        <th>Titulo Aba Perinatal Atuacao</th>
        <th>Intro Aba Perinatal Atuacao</th>
        <th>Texto Aba Perinatal Atuacao</th>
        <th>Titulo Aba Eventos Atuacao</th>
        <th>Intro Aba Eventos Atuacao</th>
        <th>Texto Aba Eventos Atuacao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($homepages as $homepage)
        <tr>
            <td>{!! $homepage->frases_slider !!}</td>
            <td>{!! $homepage->titulo_apresentacao !!}</td>
            <td>{!! $homepage->subtitulo_apresentacao !!}</td>
            <td>{!! $homepage->texto_apresentacao !!}</td>
            <td>{!! $homepage->curriculum_json !!}</td>
            <td>{!! $homepage->link_curriculum !!}</td>
            <td>{!! $homepage->titulo_atuacao !!}</td>
            <td>{!! $homepage->titulo_aba_psic_atuacao !!}</td>
            <td>{!! $homepage->intro_aba_psic_atuacao !!}</td>
            <td>{!! $homepage->texto_aba_psic_atuacao !!}</td>
            <td>{!! $homepage->titulo_aba_social_atuacao !!}</td>
            <td>{!! $homepage->intro_aba_social_atuacao !!}</td>
            <td>{!! $homepage->texto_aba_social_atuacao !!}</td>
            <td>{!! $homepage->titulo_aba_perinatal_atuacao !!}</td>
            <td>{!! $homepage->intro_aba_perinatal_atuacao !!}</td>
            <td>{!! $homepage->texto_aba_perinatal_atuacao !!}</td>
            <td>{!! $homepage->titulo_aba_eventos_atuacao !!}</td>
            <td>{!! $homepage->intro_aba_eventos_atuacao !!}</td>
            <td>{!! $homepage->texto_aba_eventos_atuacao !!}</td>
            <td>
                {!! Form::open(['route' => ['homepages.destroy', $homepage->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('homepages.show', [$homepage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('homepages.edit', [$homepage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>