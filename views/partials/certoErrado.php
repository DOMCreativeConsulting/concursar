<div class="row questao-box" id="<?=$questao->id?>">
        <input type="hidden" id="resposta" value="<?=$questao->certoErrado;?>">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="atributes">
                <span>Ano: <span class="dado"><?=$questao->ano;?></span></span>
                <span>Banca: <span class="dado"><?=$questao->banca;?></span></span>
                <!--<span>Dificuldade: <span class="dado"><//?=$questao->dificuldade;?></span></span>-->
                <span>Instituição: <span class="dado"><?=$questao->instituicao;?></span></span>
            </div>
            <div class="questao">
                <p style="text-align:justify !important;">Questão: <?=$questao->questao;?></p>
            </div>
            <div class="responder">
                <div class="alternativas">
                    <ul>
                        <li>
                            <div ><?=$questao->a;?><br></div>
                            <div>
                                <label>
                                    <input type="radio" class="option-input radio" value="c" id="c" name="resposta" checked />
                                    Certo
                                </label>
                                <br>
                                <label>
                                    <input type="radio" class="option-input radio" value="e" id="e" name="resposta" />
                                    Errado
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <?php
                        if(isset($_SESSION['logado']) == 1){?>
                            <button id="<?=$questao->id?>" value="Responder" class="botaoResponder" onclick="corrigirCertoErrado(this);">Responder</button>
                        <?php
                        }else{?>
                            <button id="<?=$questao->id?>" value="Responder" class="botaoResponder" onclick="logar('responder');">Responder</button>
                        <?php } ?>
                    </div>
                    <div class="col-md-2">
                        <p id="textoResposta" class="textoResposta"></p>
                    </div>
                    <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <?php
                                if(isset($_SESSION['logado']) == 1){?>
                                <button type="button" id="<?=$questao->id;?>" class="botao-comentar botaoCinza"><i class="fa fa-comment"></i> Comentários</button>
                                <?php }else{ ?>
                                <button type="button" onclick="logar('comentar');" class="botao-comentar botaoCinza"><i class="fa fa-comment"></i> Comentários</button>
                                <?php } ?>
                            </div>
                            <div class="col-md-4">
                                <form id="reportarErro-<?=$questao->id;?>" action="reportar-erro" method="POST">
                                    <input type="hidden" value="<?=$questao->id;?>" name="id"> 
                                    <span><button class="botaoCinza" type="submit"><i class="fa fa-flag"></i> Reportar Erro</button></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="<?=$questao->id;?>-comentarios" class="row comentarios">
                <div class="col-md-12 commentary-section">
                    <div class="row">
                        <div id="todos-comentarios-<?=$questao->id;?>" class="col-md-12 outros-comentarios">
                            <?php foreach($comentarios as $comentario): ?>
                            <?php if($comentario->questaoId == $questao->id): ?>
                                <div class="row comentario">
                                    <div class="col-md-1">
                                        <img src="public/assets/img/user.png" width="35px">
                                    </div>
                                    <div class="col-md-11">
                                        <p><b><?=$comentario->autor;?></b><br><?=$comentario->comentario;?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-12">
                            <form class="form-comentar-<?=$questao->id;?>" id="comentar" method="POST" onsubmit="return false">
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text" id="input-comentar-<?=$questao->id;?>" class="form-control" placeholder="Escreva seu comentário...">
                                        <input type="hidden" id="input-autor-<?=$questao->id;?>" value="<?=$_SESSION['user'];?>">
                                    </div>
                                    <div class="col-md-2">
                                        <button id="<?=$questao->id;?>" type="submit" onclick="comentar(this);" class="btn enviar-comentario">Comentar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="resultado"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>