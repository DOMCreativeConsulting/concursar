<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.php'; ?>

        <section class="p-t-60 p-b-20">
            <div class="container">

                <form method="POST">

                    <div class="row">
                        <div class="col-lg-12">
                            <h2 style="text-align:center">Cadastrar Questões</h2>
                        </div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <label for="modalidade">Modalidade: </label>
                            <select id="modalidade" name="modalidade" class="form-control">
                                <option value="multipla-escolha">Múltipla Escolha</option>
                                <option value="certo ou errado">Certo ou Errado</option>
                            </select>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <label for="questao">Questão</label>
                            <textarea name="questao" class="form-control"></textarea>
                        </div>
                        <div class="col-lg-3">
                            <label for="questao">Tags</label>
                            <textarea name="tags" class="form-control" maxlength="300" placeholder="tags, sobre, questoes, etc."></textarea>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="a"> Alternativa <b>A</b></label>
                                    <textarea class="form-control" name="a" type="text"></textarea> 
                                </div>
                                <div class="col-lg-8 ce">
                                    <label for="certoErrado">Resposta: </label>
                                    <select name="certoErrado" class="form-control">
                                        <option value="c">Certo</option>
                                        <option value="e">Errado</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <div class="me">
                                        <label for="b"> Alternativa <b>B</b></label>
                                        <textarea class="form-control" name="b" type="text"></textarea> 
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="me">
                                        <label for="c"> Alternativa <b>C</b></label>
                                        <textarea class="form-control" name="c" type="text" ></textarea> 
                                    </div>
                                </div>
                            </div>              
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="me">
                                        <label for="d"> Alternativa <b>D</b></label>
                                        <textarea class="form-control" name="d" >  </textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="me">
                                        <label for="e"> Alternativa <b>E</b></label>
                                        <textarea class="form-control" name="e" type="text"></textarea> 
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="me">
                                        <label for="resposta"><i class="fa fa-check"></i> Resposta</label>
                                        <select name="resposta" class="form-control">
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                            <option value="e">E</option>
                                        </select> 
                                    </div>  
                                </div>
                            </div>          
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">  
                                    <label for="Area_Atuacao"><i class="fa fa-briefcase"></i> Área de Atuação</label>
                                    <input class="form-control" name="Area_Atuacao" list="Area_Atuacao" placeholder="Pesquisar...">
                                    <datalist id="Area_Atuacao">
                                        <?php foreach($Areas_Atuacao as $Area_Atuacao): ?>
                                        <option value="<?=$Area_Atuacao->valor?>"><?=$Area_Atuacao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>   
                                </div>
                                <div class="col-lg-4">
                                    <label for="disciplinas"><i class="fa fa-book"></i> Disciplinas</label>
                                    <input class="form-control" name="disciplinas" list="disciplinas" placeholder="Pesquisar...">
                                    <datalist id="disciplinas">
                                        <?php foreach($disciplinas as $disciplina): ?>
                                        <option value="<?=$disciplina->valor?>"><?=$disciplina->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>  
                                </div>
                                <div class="col-lg-4">
                                    <label for="assunto"><i class="fa fa-comment"></i> Assunto</label>
                                    <input class="form-control" name="assunto" list="assunto" placeholder="Pesquisar...">
                                    <datalist id="assunto">
                                        <?php foreach($assuntos as $assunto): ?>
                                        <option value="<?=$assunto->valor?>"><?=$assunto->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                            </div>              
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="banca"><i class="fa fa-table"></i> Banca</label>
                                    <input class="form-control" name="banca" list="banca" placeholder="Pesquisar...">
                                    <datalist id="banca">
                                        <?php foreach($bancas as $banca): ?>
                                        <option value="<?=$banca->valor?>"><?=$banca->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-lg-4">
                                    <label for="instituicao"><i class="fa fa-home"></i> Instituição</label>
                                    <input class="form-control" name="instituicao" list="instituicoes" placeholder="Pesquisar...">
                                    <datalist id="instituicoes">
                                        <?php foreach($instituicoes as $instituicao): ?>
                                        <option value="<?=$instituicao->valor?>"><?=$instituicao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-lg-4">
                                    <label for="ano"><i class="fa fa-calendar"></i> Ano</label>
                                    <input class="form-control" name="ano" list="ano" placeholder="Pesquisar...">
                                    <?php $ano = date('Y'); ?>
                                    <datalist id="ano">
                                        <?php for($i = 1994; $i <= $ano; $i++): ?>
                                            <option value="<?=$i;?>"><?=$i;?></option>
                                        <?php endfor; ?>
                                    </datalist>        
                                </div>
                            </div>              
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="cargo"><i class="fa fa-user"></i> Cargo</label>
                                    <input class="form-control" name="cargo" list="cargo" placeholder="Pesquisar...">
                                    <datalist id="cargo">
                                        <?php foreach($cargos as $cargo): ?>
                                        <option value="<?=$cargo->valor?>"><?=$cargo->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-lg-4">
                                    <label for="nivel"><i class="fa fa-arrow-down"></i> Nível</label>
                                    <input class="form-control" name="nivel" list="nivel" placeholder="Pesquisar...">
                                    <datalist id="nivel">
                                        <option value="Fundamental">Fundamental</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Superior">Superior</option>
                                    </datalist>  
                                </div>
                                <div class="col-lg-4">
                                    <label for="Area_Formacao"><i class="fa fa-copy"></i> Área de Formação</label>
                                    <input class="form-control" name="Area_Formacao" list="Area_Formacao" placeholder="Pesquisar...">
                                    <datalist id="Area_Formacao">
                                        <?php foreach($Areas_Formacao as $Area_Formacao): ?>
                                        <option value="<?=$Area_Formacao->valor?>"><?=$Area_Formacao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                            </div>              
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 offset-md-4">
                                    <label for="dificuldade"><i class="fa fa-angle-up"></i> Dificuldade</label>
                                    <select class="form-control" name="dificuldade" id="dificuldade">
                                        <option value="Fácil">Fácil</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Difícil">Difícil</option>
                                        <option value="Muito Difícil">Muito Difícil</option>
                                    </select>  
                                </div>
                            </div>              
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row paddingTop4">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <button style="width:100% !important;" type="submit" class="botaoCadastrarFiltro">Cadastrar</button>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>

                </form>

            </div>
        </section>

        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
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
    <script src="public/assets/js/cadastrarQuestoes.js"></script>

</body>

</html>