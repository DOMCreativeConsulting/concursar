function corrigir(objeto){

    var id = objeto.id;

    var respostaUsuario = document.getElementsByName('resposta');
    var respostaCorreta = document.getElementById('resposta').value;

    respostaUsuario.forEach((resposta) =>{

        if (resposta.checked)
        {

            var correcao = resposta.value;

            if(respostaCorreta == correcao){

                $(`#${id} #textoResposta`).html("ACERTOU!");

            }else{

                $(`#${id} #textoResposta`).html("ERROU!");
                $(`#${id} #${correcao}`).css("color","red");

            }

        }

    });

    $(`#${id} #${respostaCorreta}`).css("color","green");

}
