<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.html'; ?>

        <section class="p-t-60 p-b-20">
            <div class="container">

                <form method="POST">

                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title">Cadastrar Questões</h2>
                        </div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <label for="questao">Questão</label>
                            <textarea name="questao" class="form-control"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="questao">Tags</label>
                            <textarea name="tags" class="form-control" placeholder="tags, sobre, questoes, etc."></textarea>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="modalidade"><i class="fa fa-check"></i> Modalidade</label>
                                    <input class="datalistFiltros" name="modalidade" list="modalidade" placeholder="Pesquisar...">
                                    <datalist id="modalidade" class="datalistFiltros">
                                        <option value="Múltipla-Escolha"></option>
                                        <option value="Certo ou Errado"></option>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="disciplinas">Disciplinas</label>
                                    <input class="datalistFiltros" name="disciplinas" list="disciplinas" placeholder="Pesquisar...">
                                    <datalist id="disciplinas" class="datalistFiltros">
                                        <?php foreach($disciplinas as $disciplina): ?>
                                        <option value="<?=$disciplina->valor?>"><?=$disciplina->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>  
                                </div>
                                <div class="col-md-4">
                                    <label for="assunto">Assunto</label>
                                    <input class="datalistFiltros" name="assunto" list="assunto" placeholder="Pesquisar...">
                                    <datalist id="assunto" class="datalistFiltros">
                                        <?php foreach($assuntos as $assunto): ?>
                                        <option value="<?=$assunto->valor?>"><?=$assunto->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                            </div>              
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="banca">Banca</label>
                                    <input class="datalistFiltros" name="banca" list="banca" placeholder="Pesquisar...">
                                    <datalist id="banca" class="datalistFiltros">
                                        <?php foreach($bancas as $banca): ?>
                                        <option value="<?=$banca->valor?>"><?=$banca->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="instituicao">Instituição</label>
                                    <input class="datalistFiltros" name="instituicao" list="instituicoes" placeholder="Pesquisar...">
                                    <datalist id="instituicoes" class="datalistFiltros">
                                        <?php foreach($instituicoes as $instituicao): ?>
                                        <option value="<?=$instituicao->valor?>"><?=$instituicao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="ano">Ano</label>
                                    <input class="datalistFiltros" name="ano" list="ano" placeholder="Pesquisar...">
                                    <datalist id="ano" class="datalistFiltros">
                                        <option value="2019">2019</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
                                    </datalist>        
                                </div>
                            </div>              
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="cargo"><i class="fa fa-check"></i> Cargo</label>
                                    <input class="datalistFiltros" name="cargo" list="cargo" placeholder="Pesquisar...">
                                    <datalist id="cargo" class="datalistFiltros">
                                        <?php foreach($cargos as $cargo): ?>
                                        <option value="<?=$cargo->valor?>"><?=$cargo->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="nivel">Nível</label>
                                    <input class="datalistFiltros" name="nivel" list="nivel" placeholder="Pesquisar...">
                                    <datalist id="nivel" class="datalistFiltros">
                                        <option value="Fundamental">Fundamental</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Superior">Superior</option>
                                    </datalist>  
                                </div>
                                <div class="col-md-4">
                                    <label for="Area_Formacao">Área de Formação</label>
                                    <input class="datalistFiltros" name="Area_Formacao" list="Area_Formacao" placeholder="Pesquisar...">
                                    <datalist id="Area_Formacao" class="datalistFiltros">
                                        <?php foreach($Areas_Formacao as $Area_Formacao): ?>
                                        <option value="<?=$Area_Formacao->valor?>"><?=$Area_Formacao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                            </div>              
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="Area_Atuacao"><i class="fa fa-check"></i> Área de Atuação</label>
                                    <input class="datalistFiltros" name="Area_Atuacao" list="Area_Atuacao" placeholder="Pesquisar...">
                                    <datalist id="Area_Atuacao" class="datalistFiltros">
                                        <?php foreach($Areas_Atuacao as $Area_Atuacao): ?>
                                        <option value="<?=$Area_Atuacao->valor?>"><?=$Area_Atuacao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="dificuldade">Dificuldade</label>
                                    <input class="datalistFiltros" name="dificuldade" list="dificuldade" placeholder="Pesquisar...">
                                    <datalist id="dificuldade" class="datalistFiltros">
                                        <option value="Fácil">Fácil</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Difícil">Difícil</option>
                                        <option value="Muito Difícil">Muito Difícil</option>
                                    </datalist>  
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="botaoCadastrarFiltro">Cadastrar</button>
                                </div>
                            </div>              
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </form>

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

</body>

</html>