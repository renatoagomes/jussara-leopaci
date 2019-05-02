@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editando as informaçoes da página perinatal
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       @include('flash::message')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($perinatal, ['route' => ['perinatals.update', $perinatal->id], 'method' => 'patch', 'files' => true, 'id' => 'form-perinatal']) !!}

                        @include('perinatals.fields')

                        <hr>
                        @include('admin.perinatal.partials.form-referencias')
                        <hr>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
                            <a href="/admin" class="btn btn-default">Voltar</a>
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')
    @include('summernote.builder', ['textAreaClass' =>"summernote"])
<script>


function uploadFile(btn) {
    $($(btn).parents('.controles-cropper').find('input[type=file]')).click();
}

function bindUploadFile() {
    $('input[type=file]').on('change', function(el) {
        swal({
            title: 'Carregando...',
            html: '<br><i class="fa fa-spin fa-spinner fa-3x"></i><br><br><br>',
            showConfirmButton: false
        });
        $(el.target).parents('form').submit();
    })
}

function bindControlesReferencia() {
    $('.btnAdicionarReferencia').off('click');
    $('.btnExcluirReferencia').off('click');
    $('.btnAdicionarReferencia').on('click', adicionarReferencia);
    $('.btnExcluirReferencia').on('click', function(event) {
        excluirReferencia(event.target);
    });
}

function adicionarReferencia(ev) {
    ev.preventDefault();
    let novaReferencia = $('.linha-modelo-referencia').clone();
    novaReferencia.removeClass('linha-modelo-referencia').removeClass('hide').addClass('linha');
    novaReferencia.find('input[disabled]').removeAttr('disabled');
    console.log(novaReferencia);

    $('.container-linhas-referencia').append(novaReferencia);
    bindControlesReferencia();
}

function excluirReferencia(btn) {
    $(btn).parents('.linha').remove();
}

$(document).ready(function(){
    bindControlesReferencia();
});

</script>
@endsection
