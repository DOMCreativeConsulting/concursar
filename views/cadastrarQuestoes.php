<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.php'; ?>

        <section class="p-t-60 p-b-20">
            <div class="container">

                <form method="POST">

                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="text-align:center">Cadastrar Questões</h2>
                        </div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <label for="modalidade">Modalidade: </label>
                            <select id="modalidade" name="modalidade" class="form-control">
                                <option value="multipla-escolha">Múltipla Escolha</option>
                                <option value="verdadeiro ou falso">Verdadeiro ou Falso</option>
                            </select>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <label for="questao">Questão</label>
                            <textarea name="questao" class="form-control"></textarea>
                        </div>
                        <div class="col-md-3">
                            <label for="questao">Tags</label>
                            <textarea name="tags" class="form-control" maxlength="300" placeholder="tags, sobre, questoes, etc."></textarea>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="a"> Alternativa <b>A</b></label>
                                    <textarea class="form-control" name="a" type="text"></textarea> 
                                </div>
                                <div class="col-md-4">
                                    <label for="b"> Alternativa <b>B</b></label>
                                    <textarea class="form-control" name="b" type="text"></textarea> 
                                </div>
                                <div class="col-md-4">
                                    <label for="c"> Alternativa <b>C</b></label>
                                    <textarea class="form-control" name="c" type="text" ></textarea> 
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
                                    <label for="d"> Alternativa <b>D</b></label>
                                    <textarea class="form-control" name="d" >  </textarea>    
                                </div>
                                <div class="col-md-4">
                                    <label for="e"> Alternativa <b>E</b></label>
                                    <textarea class="form-control" name="e" type="text"></textarea> 
                                </div>
                                <div class="col-md-4">
                                    <div class="vf">
                                        <label for="f"> Alternativa <b>F</b></label>
                                        <textarea class="form-control" name="f" type="text"></textarea> 
                                    </div>
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
                            <div class="vf" class="paddingTop2">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="ra">A: </label>
                                                <select name="ra" class="form-control">
                                                    <option value="f">F</option>
                                                    <option value="v">V</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="rb">B: </label>
                                                <select name="rb" class="form-control">
                                                    <option value="f">F</option>
                                                    <option value="v">V</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="rc">C: </label>
                                                <select name="rc" class="form-control">
                                                    <option value="f">F</option>
                                                    <option value="v">V</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="rd">D: </label>
                                                <select name="rd" class="form-control">
                                                    <option value="f">F</option>
                                                    <option value="v">V</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="re">E: </label>
                                                <select name="re" class="form-control">
                                                    <option value="f">F</option>
                                                    <option value="v">V</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label for="rf">F: </label>
                                                <select name="rf" class="form-control">
                                                    <option value="f">F</option>
                                                    <option value="v">V</option>
                                                </select>
                                            </div>
                                        </div>
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
                                    <input class="form-control" name="Area_Atuacao" list="Area_Atuacao" placeholder="Pesquisar...">
                                    <datalist id="Area_Atuacao">
                                        <?php foreach($Areas_Atuacao as $Area_Atuacao): ?>
                                        <option value="<?=$Area_Atuacao->valor?>"><?=$Area_Atuacao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>   
                                </div>
                                <div class="col-md-4">
                                    <label for="disciplinas">Disciplinas</label>
                                    <input class="form-control" name="disciplinas" list="disciplinas" placeholder="Pesquisar...">
                                    <datalist id="disciplinas">
                                        <?php foreach($disciplinas as $disciplina): ?>
                                        <option value="<?=$disciplina->valor?>"><?=$disciplina->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>  
                                </div>
                                <div class="col-md-4">
                                    <label for="assunto">Assunto</label>
                                    <input class="form-control" name="assunto" list="assunto" placeholder="Pesquisar...">
                                    <datalist id="assunto">
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
                                    <input class="form-control" name="banca" list="banca" placeholder="Pesquisar...">
                                    <datalist id="banca">
                                        <?php foreach($bancas as $banca): ?>
                                        <option value="<?=$banca->valor?>"><?=$banca->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="instituicao">Instituição</label>
                                    <input class="form-control" name="instituicao" list="instituicoes" placeholder="Pesquisar...">
                                    <datalist id="instituicoes">
                                        <?php foreach($instituicoes as $instituicao): ?>
                                        <option value="<?=$instituicao->valor?>"><?=$instituicao->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="ano">Ano</label>
                                    <input class="form-control" name="ano" list="ano" placeholder="Pesquisar...">
                                    <datalist id="ano">
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
                                    <input class="form-control" name="cargo" list="cargo" placeholder="Pesquisar...">
                                    <datalist id="cargo">
                                        <?php foreach($cargos as $cargo): ?>
                                        <option value="<?=$cargo->valor?>"><?=$cargo->valor?></option>
                                        <?php endforeach; ?>
                                    </datalist>        
                                </div>
                                <div class="col-md-4">
                                    <label for="nivel">Nível</label>
                                    <input class="form-control" name="nivel" list="nivel" placeholder="Pesquisar...">
                                    <datalist id="nivel">
                                        <option value="Fundamental">Fundamental</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Superior">Superior</option>
                                    </datalist>  
                                </div>
                                <div class="col-md-4">
                                    <label for="Area_Formacao">Área de Formação</label>
                                    <input class="form-control" name="Area_Formacao" list="Area_Formacao" placeholder="Pesquisar...">
                                    <datalist id="Area_Formacao">
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
                                         
                                </div>
                                <div class="col-md-4">
                                    <label for="dificuldade">Dificuldade</label>
                                    <input class="form-control" name="dificuldade" list="dificuldade" placeholder="Pesquisar...">
                                    <datalist id="dificuldade">
                                        <option value="Fácil">Fácil</option>
                                        <option value="Médio">Médio</option>
                                        <option value="Difícil">Difícil</option>
                                        <option value="Muito Difícil">Muito Difícil</option>
                                    </datalist>  
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>              
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row paddingTop4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <button style="width:100% !important;" type="submit" class="botaoCadastrarFiltro">Cadastrar</button>
                                </div>
                                <div class="col-md-4"></div>
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
    <script src="public/assets/js/cadastrarQuestoes.js"></script>

</body>

</html>