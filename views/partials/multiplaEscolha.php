<div class="row questao-box" id="<?=$questao->id?>">
        <input type="hidden" id="resposta" value="<?=$questao->resposta;?>">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="atributes">
                <span>Ano: <span class="dado"><?=$questao->ano;?></span></span>
                <span>Banca: <span class="dado"><?=$questao->banca;?></span></span>
                <span>Dificuldade: <span class="dado"><?=$questao->dificuldade;?></span></span>
                <span>Instituição: <span class="dado"><?=$questao->instituicao;?></span></span>
                <form id="reportarErro-<?=$questao->id;?>" action="reportar-erro" method="POST">
                    <input type="hidden" value="<?=$questao->id;?>" name="id"> 
                    <span><a href="javascript:{}" onclick="document.getElementById('reportarErro-<?=$questao->id;?>').submit();" style="color:#212529;" href="reportar-erro"><b style="color:red;" ><i class="fa fa-flag"></i></b> Reportar Erro</a></span>
                </form>
            </div>
            <div class="questao">
                <p>Questão: <?=$questao->questao;?></p>
            </div>
            <div class="responder">
                <div class="alternativas">
                    <ul>
                        <li class='alternativa'>
                            <label class="container" id="<?=$questao->id;?>-a">A - <?=$questao->a;?>
                                <a onclick="riscar(this);" id="<?=$questao->id;?>-a" href="#"><i class="fa fa-scissors"></i></a>
                                <input type="radio" name="resposta" value="a">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class='alternativa'><label class="container" id="<?=$questao->id;?>-b">B - <?=$questao->b;?>
                        <a onclick="riscar(this);" id="<?=$questao->id;?>-b" href="#"><i class="fa fa-scissors"></i></a>
                                <input type="radio" name="resposta" value="b">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class='alternativa'><label class="container" id="<?=$questao->id;?>-c">C - <?=$questao->c;?>
                        <a onclick="riscar(this);" id="<?=$questao->id;?>-c" href="#"><i class="fa fa-scissors"></i></a>
                                <input type="radio" name="resposta" value="c">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class='alternativa'><label class="container" id="<?=$questao->id;?>-d">D - <?=$questao->d;?>
                        <a onclick="riscar(this);" id="<?=$questao->id;?>-d" href="#"><i class="fa fa-scissors"></i></a>
                                <input type="radio" name="resposta" value="d">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        <li class='alternativa'><label class="container" id="<?=$questao->id;?>-e">E - <?=$questao->e;?>
                        <a onclick="riscar(this);" id="<?=$questao->id;?>-e" href="#"><i class="fa fa-scissors"></i></a>
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