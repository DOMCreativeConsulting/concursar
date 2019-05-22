$(document).ready(function(){

    $('.hide').hide();
    $('.CE').hide();

});

function alterar(objeto){

    var id = objeto.id;

    if($(`#modalidade-${id}`).val() == 'multipla-escolha'){
        $('.ME').show(300);
        $('.CE').hide(300);
    }

    if($(`#modalidade-${id}`).val() == 'certo ou errado'){
        $('.ME').hide(300);
        $('.CE').show(300);
    }

    $('#alterar-questao').html($(`#questao-${id}`).val());
    $('#id').val($(`#${id}`).val());
    $('#alterar-tags').html($(`#tags-${id}`).val());
    $('#alterar-a').val($(`#a-${id}`).val());
    $('#alterar-b').val($(`#b-${id}`).val());
    $('#alterar-c').val($(`#c-${id}`).val());
    $('#alterar-d').val($(`#d-${id}`).val());
    $('#alterar-e').val($(`#e-${id}`).val());
    $('#alterar-resposta').val($(`#resposta-${id}`).val());
    $('#alterar-certoErrado').val($(`#certoErrado-${id}`).val());
    $('#alterar-disciplina').val($(`#disciplina-${id}`).val());
    $('#alterar-assunto').val($(`#assunto-${id}`).val());
    $('#alterar-banca').val($(`#banca-${id}`).val());
    $('#alterar-instituicao').val($(`#instituicao-${id}`).val());
    $('#alterar-ano').val($(`#ano-${id}`).val());
    $('#alterar-cargo').val($(`#cargo-${id}`).val());
    $('#alterar-nivel').val($(`#nivel-${id}`).val());
    $('#alterar-area_atuacao').val($(`#area_atuacao-${id}`).val());
    $('#alterar-area_formacao').val($(`#area_formacao-${id}`).val());
    $('#alterar-dificuldade').val($(`#dificuldade-${id}`).val());

}