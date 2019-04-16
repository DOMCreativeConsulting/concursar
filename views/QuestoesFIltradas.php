<?php include 'views/partials/head.html'; ?>
<body>
    <?php 
    
    require 'views/partials/filtro.php';

    foreach ($resultado as $questao):
    
    ?>

    <div class="row questao-box" id="<?=$questao->id?>">
        <input type="hidden" id="resposta" value="<?=$questao->resposta;?>">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="atributes">
                <span>Ano: <span class="dado"><?=$questao->ano;?></span></span>
                <span>Banca: <span class="dado"><?=$questao->banca;?></span></span>
                <span>Dificuldade: <span class="dado"><?=$questao->dificuldade;?></span></span>
                <span>Instituição: <span class="dado"><?=$questao->instituicao;?></span></span>
            </div>
            <div class="questao">
                <p>Questão: <?=$questao->questao;?></p>
            </div>
            <div class="responder">
                <div class="alternativas">
                    <ul>
                        <li><label class="container" id="a">A - <?=$questao->a;?>
                                <input type="radio" name="resposta" value="a">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li><label class="container" id="b">B - <?=$questao->b;?>
                                <input type="radio" name="resposta" value="b">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li><label class="container" id="c">C - <?=$questao->c;?>
                                <input type="radio" name="resposta" value="c">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li><label class="container" id="d">D - <?=$questao->d;?>
                                <input type="radio" name="resposta" value="d">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li><label class="container" id="e">E - <?=$questao->e;?>
                                <input type="radio" name="resposta" value="e">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <?php
                        if(isset($_SESSION['logado']) == 1){?>
                            <button id="<?=$questao->id?>" value="Responder" class="botaoResponder" onclick="corrigir(this);">Responder</button>
                        <?php
                        }else{?>
                            <button id="<?=$questao->id?>" value="Responder" class="botaoResponder" onclick="logar();">Responder</button>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <p id="textoResposta" class="textoResposta"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <?php endforeach; ?>
    <script src="public/assets/js/resposta.js"></script>

</body>
</html>