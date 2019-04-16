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
