function corrigir(objeto){

    var id = objeto.id;

    var respostaUsuario = document.getElementsByName('resposta');
    var respostaCorreta = $(`#${id} #resposta`).val();

    respostaUsuario.forEach((resposta) =>{

        if (resposta.checked)
        {

            var correcao = resposta.value;

            if(respostaCorreta == correcao){

                $(`#${id} #textoResposta`).html("Você Acertou!");

            }else{

                $(`#${id} #textoResposta`).html("Você Errou!<br>Resposta: "+respostaCorreta);
                $(`#${id} #${correcao}`).css("color","red");

            }

        }

    });

    $(`#${id} #${respostaCorreta}`).css("color","yellowgreen");

}

function corrigirCertoErrado(objeto){

    var id = objeto.id;

    var respostaUsuario = document.getElementsByName('resposta');
    var respostaCorreta = $(`#${id} #resposta`).val();

    respostaUsuario.forEach((resposta) =>{

        var correcao = resposta.value;

        if (resposta.checked)
        {

            if(respostaCorreta == correcao){

                $(`#${id} #textoResposta`).html("Você Acertou!");

            }else{

                $(`#${id} #textoResposta`).html("Você Errou!");
                $(`#${id} #${correcao}`).css("color","red");

            }

        }

    });

    $(`#${id} #${respostaCorreta}`).css("color","yellowgreen");


}

function logar(){

    alert("Você precisar estar logado para responder!");
    window.location.replace("login");

}

function corrigirVouF(){
    alert('correcao');
}

function riscar(objeto){
    var id = objeto.id;
    $(`#${id}`).css('text-decoration','line-through');
    $(`#${id}`).prop('disabled', true);
}

$(document).ready(function(){

    $('.comentarios').hide();

    $('.botao-comentar').click(function(){

        $(`#${this.id}-comentarios`).fadeToggle(150);
        $('#input-comentar').focus();

    });

});

$(".form-comentar").submit(function(e) {

    e.preventDefault();

});

function comentar(objeto){

    var id = objeto.id;

    $(`#form-comentar-${id}`).submit();

    comentario = $(`#input-comentar-${id}`).val();
    autor = $(`#input-autor-${id}`).val();

    $.ajax({
        url : "comentar",
        type : 'post',
        data : {
            comentario : comentario,
            questaoId : id,
            autor : autor
        },
        beforeSend : function(){
            $("#resultado").html("Enviando...");
        }
    })
    .done(function(msg){
        $(`#input-comentar-${id}`).val([]);
        $("#resultado").html(msg);
    })
    .fail(function(jqXHR, textStatus, msg){
        alert(msg);
    });

}