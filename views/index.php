<?php include 'views/partials/head.html'; ?>
<?php include 'views/partials/siteNavbar.php'; ?>
<body>
    <?php 
    
    require 'views/partials/filtro.php';

    if(isset($_POST['maxItens'])){

        $maxItens = $maxItens + $_POST['maxItens'];

    }else{
        $maxItens = 30;
    }

    $quantidade = 0;

    foreach ($questoes as $questao){

        $quantidade++;

        if($quantidade <= $maxItens){

    ?>

    <?php if($questao->modalidade == 'multipla-escolha'): ?>

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

    <?php endif; ?>

    <?php if($questao->modalidade == 'verdadeiro ou falso'): ?>

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
                        <li>
                            <div><?=$questao->a;?><br></div>
                            <h6>
                                <input type="radio" name="respostaA" value="v">Verdadeiro<br>
                                <input type="radio" name="respostaA" value="f">Falso
                            </h6>
                        </li>
                        <li>
                        <div><?=$questao->b;?><br></div>
                            <h6>
                                <input type="radio" name="respostaB" value="v">Verdadeiro<br>
                                <input type="radio" name="respostaB" value="f">Falso
                            </h6>
                        </li>
                        <li>
                        <div><?=$questao->c;?><br></div>
                            <h6>
                                <input type="radio" name="respostaC" value="v">Verdadeiro<br>
                                <input type="radio" name="respostaC" value="f">Falso
                            </h6>
                        </li>
                        <li>
                        <div><?=$questao->d;?><br></div>
                            <h6>
                                <input type="radio" name="respostaD" value="v">Verdadeiro<br>
                                <input type="radio" name="respostaD" value="f">Falso
                            </h6>
                        </li>
                        <li>
                        <div><?=$questao->e;?><br></div>
                            <h6>
                                <input type="radio" name="respostaE" value="v">Verdadeiro<br>
                                <input type="radio" name="respostaE" value="f">Falso
                            </h6>
                        </li>
                        <li>
                        <div><?=$questao->f;?><br></div>
                            <h6>
                                <input type="radio" name="respostaF" value="v">Verdadeiro<br>
                                <input type="radio" name="respostaF" value="f">Falso
                            </h6>
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

    <?php endif; ?>

    <?php }
    } ?>

    <script src="public/assets/js/resposta.js"></script>
    <script src="public/assets/js/mobile.js"></script>
    <p style="text-align:center">
        Copyright © 2019 Concursar. Todos os direitos reservados. Desenvolvido com ♥ por <a href="http://dom.com.vc/">DOM</a>.
    </p>

</body>
</html>