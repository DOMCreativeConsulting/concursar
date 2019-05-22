<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="usersBox scroll">
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
                                    <button type="submit" name="questao" id="<?=$questao->id;?>" onclick="alterar(this);" value="<?=$questao->id;?>" class="botao-editar" href="#">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" value="<?=$questao->id;?>" id="<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->questao;?>" id="questao-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->tags;?>" id="tags-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->a;?>" id="a-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->b;?>" id="b-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->c;?>" id="c-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->d;?>" id="d-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->e;?>" id="e-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->resposta;?>" id="resposta-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->certoErrado;?>" id="certoErrado-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->disciplina;?>" id="disciplina-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->assunto;?>" id="assunto-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->banca;?>" id="banca-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->instituicao;?>" id="instituicao-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->ano;?>" id="ano-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->cargo;?>" id="cargo-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->nivel;?>" id="nivel-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->area_formacao;?>" id="area_formacao-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->area_atuacao;?>" id="area_atuacao-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->modalidade;?>" id="modalidade-<?=$questao->id;?>">
                            <input type="hidden" value="<?=$questao->dificuldade;?>" id="dificuldade-<?=$questao->id;?>">
                        </li>
                        <?php
                        endforeach; 
                        ?>
                        </ul>
                    </div>
                    <form class="col-md-6" action="atualizar" method="POST">
                        <div class="col-md-12">
                            <div class="row usersBox">
                                <input type="hidden" id="id" name="id">
                                <div class="col-md-12">
                                    <h2 style="text-align:center;padding:1%"><i class="fa fa-edit"></i> Editar Questão</h2>
                                </div>
                                <div class="col-md-8">
                                    <label for="alterar-questao">Questão: </label>
                                    <textarea class="form-control" placeholder="Questão..." id="alterar-questao" name="questao"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="alterar-tags"><i class="fa fa-tags"></i> Tags: </label>
                                    <textarea class="form-control" placeholder="Tags..." id="alterar-tags" name="tags"></textarea>
                                </div>
                                <div class="paddingTop2 col-md-6">
                                    <label for="alterar-a">Alternativa <b>A</b>: </label>
                                    <input type="text" class="form-control" id="alterar-a" name="a">
                                </div>
                                <div class="paddingTop2 col-md-6 ME">
                                    <label for="alterar-b">Alternativa <b>B</b>: </label>
                                    <input type="text" class="form-control" id="alterar-b" name="b">
                                </div>
                                <div class="paddingTop2 col-md-6 ME">
                                    <label for="alterar-c">Alternativa <b>C</b>: </label>
                                    <input type="text" class="form-control" id="alterar-c" name="c">
                                </div>
                                <div class="paddingTop2 col-md-6 ME">
                                    <label for="alterar-d">Alternativa <b>D</b>: </label>
                                    <input type="text" class="form-control" id="alterar-d" name="d">
                                </div>
                                <div class="paddingTop2 col-md-6 ME">
                                    <label for="alterar-e">Alternativa <b>E</b>: </label>
                                    <input type="text" class="form-control" id="alterar-e" name="e">
                                </div>
                                <div class="paddingTop2 col-md-6 ME">
                                    <label for="alterar-resposta">Resposta: </label>
                                    <input type="text" class="form-control" id="alterar-resposta" name="resposta">
                                </div>
                                <div class="paddingTop2 col-md-6 CE">
                                    <label class="CE" for="alterar-certoErrado">Resposta: </label>
                                    <input type="text" class="form-control CE" id="alterar-certoErrado" placeholder="'c' ou 'e'" name="certoErrado">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-disciplina"><i class="fa fa-book"></i> Disciplina: </label>
                                    <input type="text" class="form-control" id="alterar-disciplina" name="disciplina">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-assunto"><i class="fa fa-comment"></i> Assunto: </label>
                                    <input type="text" class="form-control" id="alterar-assunto" name="assunto">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-banca"><i class="fa fa-table"></i> Banca: </label>
                                    <input type="text" class="form-control" id="alterar-banca" name="banca">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-instituicao"><i class="fa fa-home"></i> Instituição: </label>
                                    <input type="text" class="form-control" id="alterar-instituicao" name="instituicao">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-ano"><i class="fa fa-calendar"></i> Ano: </label>
                                    <input type="text" class="form-control" id="alterar-ano" name="ano">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-cargo"><i class="fa fa-user"></i> Cargo: </label>
                                    <input type="text" class="form-control" id="alterar-cargo" name="cargo">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-nivel"><i class="fa fa-arrow-up"></i> Nível: </label>
                                    <input type="text" class="form-control" id="alterar-nivel" name="nivel">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-area_atuacao"><i class="fa fa-briefcase"></i> Área de Atuação: </label>
                                    <input type="text" class="form-control" id="alterar-area_atuacao" name="area_atuacao">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-area_formacao"><i class="fa fa-feather"></i> Área de Formação: </label>
                                    <input type="text" class="form-control" id="alterar-area_formacao" name="area_formacao">
                                </div>
                                <div class="paddingTop2 col-md-4">
                                    <label for="alterar-dificuldade"><i class="fa fa-arrow-down"></i> Dificuldade: </label>
                                    <input type="text" class="form-control" id="alterar-dificuldade" name="dificuldade">
                                </div>
                                <div style="padding-bottom:2%;" class="paddingTop2 col-md-12">
                                    <button style="background-color:#D2AE6D;color:white;" type="submit" class="form-control col-md-4 offset-md-4">Atualizar</button>
                                </div>
                            </div>
                        </div>
                    </form>
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