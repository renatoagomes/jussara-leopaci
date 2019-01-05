@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Informaçoes da Homepage</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        <div class="clearfix"></div>

        @include('homepages.box-citacoes')

        @include('homepages.box-apresentacao')

    </div>
@endsection


@section('scripts')

    <script>

function bindControles() {
        $('.btnAdicionarCitacao').off('click');
        $('.btnExcluirCitacao').off('click');
        $('.btnAdicionarCitacao').on('click', adicionarCitacao);
        $('.btnExcluirCitacao').on('click', function(event) {
            excluirCitacao(event.target);
        });
}

function adicionarCitacao() {
    let novaCitacao = $('.linha-modelo').clone();
    novaCitacao.removeClass('linha-modelo').removeClass('hide').addClass('linha');
    $('.container-linhas').append(novaCitacao);
    bindControles();
}

function excluirCitacao(btn) {
    $(btn).parents('.linha').remove();
}

$(document).ready(function(){
    bindControles();
});

function uploadFile(btn) {
    $($(btn).parents('controles-cropper').find('input[type=file]')).click();
}


    </script>

@endsection
