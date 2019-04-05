function corrigir(){

    var respostaUsuario = document.getElementsByName('resposta');
    var respostaCorreta = document.getElementById('resposta').value;

    respostaUsuario.forEach((resposta) =>{

        if (resposta.checked)
        {

            var correcao = resposta.value;

            if(respostaCorreta == correcao){

                document.getElementById('textoResposta').innerHTML = "Você acertou!";

            }else{

                document.getElementById('textoResposta').innerHTML = "Você errou!";
                document.getElementById(correcao).style.color = "red";

            }

        }

    });

    document.getElementById(respostaCorreta).style.color = "green";

}
