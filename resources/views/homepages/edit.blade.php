@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Homepage
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($homepage, ['route' => ['homepages.update', $homepage->id], 'method' => 'patch']) !!}

                        @include('homepages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection