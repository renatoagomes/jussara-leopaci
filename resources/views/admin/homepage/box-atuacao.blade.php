<style>

.mt-1 { margin-top: 1rem; }
.mt-2 { margin-top: 2rem; }
.mt-3 { margin-top: 3rem; }
.mt-4 { margin-top: 4rem; }
.mt-5 { margin-top: 5rem; }

</style>
<div class="box box-primary">
    <div class="box-header with-border ">
        <h2 class="box-title">Terceira seção - Atuação</h2>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">

        {!! Form::open(['url' => "/admin/update-home"]) !!}

        <div class="col-sm-12 text-center">
            <div class="col-sm-4"></div>
            <!-- Titulo Atuação Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('titulo_atuacao', 'Titulo') !!}
                {!! Form::text('titulo_atuacao', $Homepage->titulo_atuacao, ['class' => 'form-control text-center']) !!}
            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="col-xs-5"></div>
        <div class="col-xs-2">
            {!! Form::button('<i class="glyphicon glyphicon-check"></i> &nbsp; <strong>Salvar</strong>', ['type' => 'submit', 'class' => 'btn btn-info btn-xs form-control']) !!}
        </div>
        <div class="col-xs-5"></div>

        {!! Form::close() !!}

        <div class="col-xs-12">
            <div class="mt-3 mb-3 text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item col-xs-3">
                        <a class="nav-link active" data-toggle="tab" href="#tab-psicanalitica" role="tab" aria-controls="tab-psicanalitica" aria-selected="true" >{{ mb_strtoupper($Homepage->titulo_aba_psic_atuacao) }}</a>
                    </li>
                    <li class="nav-item col-xs-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-social" role="tab" aria-controls="social" aria-selected="false">{{ mb_strtoupper($Homepage->titulo_aba_social_atuacao) }}</a>
                    </li>
                    <li class="nav-item col-xs-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-perinatal" role="tab" aria-controls="perinatal" aria-selected="false">{{ mb_strtoupper($Homepage->titulo_aba_perinatal_atuacao) }}</a>

                    </li>
                    <li class="nav-item col-xs-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-eventos" role="tab" aria-controls="eventos" aria-selected="false">{{ mb_strtoupper($Homepage->titulo_aba_eventos_atuacao) }}</a>
                    </li>
                </ul>
           </div>
        </div>

        <div class="tab-content col-xs-12">
            <div class="tab-pane active" id="tab-psicanalitica" role="tabpanel" aria-labelledby="tab-psicanalitica-tab">
                @include('admin.homepage.conteudo-tab-psicanalitica')
            </div>

            <div class="tab-pane fade" id="tab-social" role="tabpanel" aria-labelledby="tab-social-tab">
                @include('admin.homepage.conteudo-tab-social')
            </div>

            <div class="tab-pane fade" id="tab-perinatal" role="tabpanel" aria-labelledby="tab-perinatal-tab">
                @include('admin.homepage.conteudo-tab-perinatal')
            </div>

            <div class="tab-pane fade" id="tab-eventos" role="tabpanel" aria-labelledby="tab-eventos-tab">
                @include('admin.homepage.conteudo-tab-eventos')
            </div>
        </div>
    </div><!-- /.box-body -->
</div><!-- /.box -->
