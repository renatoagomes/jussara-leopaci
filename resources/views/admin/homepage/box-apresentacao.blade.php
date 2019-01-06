
<div class="box box-primary">
    <div class="box-header with-border ">
        <h2 class="box-title">Seção Apresentação</h2>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="col-xs-12">
            @include('admin.homepage.partials.apresentacao-geral')
        </div>

        <div class="col-xs-12"> <hr> </div>

        <div class="col-xs-7">
            @include('admin.homepage.partials.apresentacao-curriculum')
        </div>

        <div class="col-xs-5">
            @include('admin.homepage.partials.apresentacao-foto')
        </div>

        <div class="col-xs-12"><br></div>

        <!-- Link Curriculum Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('link_curriculum', "Link do 'Saiba Mais'") !!}
            {!! Form::text('link_curriculum', null, ['class' => 'form-control']) !!}
        </div>

    </div><!-- /.box-body -->
</div><!-- /.box -->
