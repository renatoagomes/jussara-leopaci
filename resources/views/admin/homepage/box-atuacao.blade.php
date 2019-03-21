<style>

.mt-1 { margin-top: 1rem; }
.mt-2 { margin-top: 2rem; }
.mt-3 { margin-top: 3rem; }
.mt-4 { margin-top: 4rem; }
.mt-5 { margin-top: 5rem; }

</style>
<div class="box box-primary">
    <div class="box-header with-border ">
        <h2 class="box-title">Seção Atuação</h2>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">


        <div class="col-sm-12 text-center">
            <div class="col-sm-4"></div>
            <!-- Titulo Atuação Field -->
            <div class="form-group col-sm-4">
                {!! Form::label('titulo_atuacao', 'Titulo') !!}
                {!! Form::text('titulo_atuacao', $Homepage->titulo_atuacao, ['class' => 'form-control text-center']) !!}
            </div>
            <div class="col-sm-4"></div>
        </div>

        <div class="col-xs-12">
            <div class="mt-3 text-center">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item col-xs-3">
                        <a class="nav-link active" data-toggle="tab" href="#tab-psicanalitica" role="tab" aria-controls="tab-psicanalitica" aria-selected="true" >{{ $Homepage->titulo_aba_psic_atuacao }}</a>
                    </li>
                    <li class="nav-item col-xs-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-social" role="tab" aria-controls="social" aria-selected="false">{{ $Homepage->titulo_aba_social_atuacao }}</a>
                    </li>
                    <li class="nav-item col-xs-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-perinatal" role="tab" aria-controls="perinatal" aria-selected="false">{{ $Homepage->titulo_aba_perinatal_atuacao }}</a>

                    </li>
                    <li class="nav-item col-xs-3">
                        <a class="nav-link" data-toggle="tab" href="#tab-eventos" role="tab" aria-controls="eventos" aria-selected="false">{{ $Homepage->titulo_aba_eventos_atuacao }}</a>
                    </li>
                </ul>
            </div>
        </div>







    </div><!-- /.box-body -->
</div><!-- /.box -->
