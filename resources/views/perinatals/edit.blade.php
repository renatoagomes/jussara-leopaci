@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Perinatal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($perinatal, ['route' => ['perinatals.update', $perinatal->id], 'method' => 'patch']) !!}

                        @include('perinatals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection