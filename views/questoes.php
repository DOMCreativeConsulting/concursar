<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="usersBox">
                        <?php
                        foreach($questoes as $questao):
                        ?>
                        <li>
                            <div class="row">
                                <div class="col-lg-7">
                                    <?php if($questao->modalidade == 'multipla-escolha'): ?>
                                        <p style="text-align:justify;font-size:11px;"><?=$questao->questao;?></p> - Resposta: <b><?=$questao->resposta;?></b>
                                    <?php endif; ?>
                                    <?php if($questao->modalidade == 'certo ou errado'): ?>
                                        <p style="text-align:justify;font-size:11px;"><?=$questao->questao;?></p> - Resposta: <b><?=$questao->certoErrado == 'c' ? 'Certo' : 'Errado'; ?></b>
                                    <?php endif; ?>
                                </div>
                                <div class="col-lg-5">
                                    <form method="POST" action="deletar">
                                        <button type="submit" name="questao" value="<?=$questao->id;?>" class="botao-deletar" href="#">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <button type="submit" name="questao" id="<?=$questao->id;?>" onclick="rename(this);" value="<?=$questao->id;?>" class="botao-editar" href="#">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li style="display:none"></li>
                        <li class="hide" id="editar-<?=$questao->id;?>">
                            <form method="POST" action="rename">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="questao">Questão: </label>
                                        <textarea type="text" class="form-control" name="questao" placeholder="Questão..."><?=$questao->questao;?></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="tags">Tags: </label>
                                        <textarea type="text" class="form-control" name="tags" placeholder="Tags..."><?=$questao->tags;?></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <?php if($questao->modalidade == 'multipla-escolha'){ ?>
                                        <label for="resposta">Resposta: </label>
                                        <select name="resposta" class="form-control">
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                            <option value="e">E</option>
                                        </select>
                                        <?php }else{ ?>
                                        <label for="certoErrado">Resposta: </label>
                                        <select name="certoErrado" class="form-control">
                                            <option value="c">Certo</option>
                                            <option value="e">Errado</option>
                                        </select>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="asssunto">Assunto: </label>
                                        <input type="text" class="form-control" name="assunto" value="<?=$questao->assunto;?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="banca">Banca: </label>
                                        <input type="text" class="form-control" name="banca" value="<?=$questao->banca;?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="instituicao">Instituição: </label>
                                        <input type="text" class="form-control" name="instituicao" value="<?=$questao->instituicao;?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="disciplina">Disciplina: </label>
                                        <input type="text" class="form-control" name="disciplina" value="<?=$questao->disciplina;?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="ano">Ano: </label>
                                        <input type="text" class="form-control" name="ano" value="<?=$questao->ano;?>">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="cargo">Cargo: </label>
                                        <input type="text" class="form-control" name="cargo" value="<?=$questao->cargo;?>">
                                    </div>
                                    <div class="col-md-1">
                                        <button type="submit" name="questao" value="<?=$questao->id;?>" class="botaoQuestao" href="#">
                                            Salvar
                                        </button>
                                    </div>                                                                                                                                   
                                </div>
                            </form>
                        </li>
                        <?php
                        endforeach; 
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2019 Concursar. Todos os direitos reservados. Desenvolvido com ♥ por <a href="https://dom.com.vc">DOM</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="public/theme/painel/vendor/jquery-3.2.1.min.js"></script>
    <script src="public/theme/painel/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="public/theme/painel/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="public/theme/painel/vendor/slick/slick.min.js"></script>
    <script src="public/theme/painel/vendor/wow/wow.min.js"></script>
    <script src="public/theme/painel/vendor/animsition/animsition.min.js"></script>
    <script src="public/theme/painel/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="public/theme/painel/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="public/theme/painel/vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="public/theme/painel/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="public/theme/painel/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="public/theme/painel/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="public/theme/painel/vendor/select2/select2.min.js"></script>
    <script src="public/theme/painel/js/main.js"></script>
    <script src="public/assets/js/questoes.js"></script>

</body>

</html>