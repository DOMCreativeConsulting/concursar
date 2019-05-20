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
