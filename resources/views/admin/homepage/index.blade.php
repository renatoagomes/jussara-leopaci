@extends('layouts.app')

@section ('css')
    <link rel="stylesheet" href="/css/homepage.css" type="text/css" media="screen" title="no title" charset="utf-8">
@endsection

@section('content')
    <section class="content-header">
        <h1>Editando informações da página inicial</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>

        @include('admin.homepage.box-citacoes')
        @include('admin.homepage.box-apresentacao')
        @include('admin.homepage.box-atuacao')

    </div>
@endsection


@section('scripts')

    <script>

function bindControlesCitacao() {
    $('.btnAdicionarCitacao').off('click');
    $('.btnExcluirCitacao').off('click');
    $('.btnAdicionarCitacao').on('click', adicionarCitacao);
    $('.btnExcluirCitacao').on('click', function(event) {
        excluirCitacao(event.target);
    });
}

function adicionarCitacao(ev) {
    ev.preventDefault();
    let novaCitacao = $('.linha-modelo-citacao').clone();
    novaCitacao.removeClass('linha-modelo-citacao').removeClass('hide').addClass('linha');
    $('.container-linhas-citacao').append(novaCitacao);
    bindControlesCitacao();
}

function excluirCitacao(btn) {
    $(btn).parents('.linha').remove();
}



function bindControlesItemCurriculum() {
    $('.btnAdicionarItemCurriculum').off('click');
    $('.btnExcluirItemCurriculum').off('click');
    $('.btnAdicionarItemCurriculum').on('click', adicionarItemCurriculum);
    $('.btnExcluirItemCurriculum').on('click', function(event) {
        excluirItemCurriculum(event.target);
    });
}

function adicionarItemCurriculum(ev) {
    ev.preventDefault();
    let novaItemCurriculum = $('.linha-modelo-curriculum').clone();
    novaItemCurriculum.removeClass('linha-modelo-curriculum').removeClass('hide').addClass('linha');
    $('.container-linhas-curriculum').append(novaItemCurriculum);
    bindControlesItemCurriculum();
}

function excluirItemCurriculum(btn) {
    $(btn).parents('.linha').remove();
}

$(document).ready(function(){
    bindControlesCitacao();
    bindControlesItemCurriculum();
});


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


</script>

<script src="/js/homepage.js" ></script>

@endsection
