
<div class="box box-primary">
    <div class="box-header with-border ">
        <h2 class="box-title">Segunda seção -  Apresentação</h2>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="col-xs-12">

            {!! Form::open(['route' => 'homepage.update']) !!}
            @include('admin.homepage.partials.apresentacao-geral')
            {!! Form::close() !!}
        </div>

        <div class="col-xs-12"> <hr> </div>


        <div class="col-xs-8">
            {!! Form::open(['route' => 'homepage.update']) !!}
            @include('admin.homepage.partials.apresentacao-curriculum')
            {!! Form::close() !!}
        </div>

        <div class="col-xs-4">
            @include('admin.homepage.partials.apresentacao-foto')
        </div>

        <div class="col-xs-12"><br></div>


    </div><!-- /.box-body -->
</div><!-- /.box -->
