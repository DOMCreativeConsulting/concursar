<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.html'; ?>

        <section class="p-t-60 p-b-20">
            <div class="container disciplinas">
                <div class="row">

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fa fa-book"></i> Disciplina</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($disciplinas as $disciplina): ?>
                                <li><?=utf8_encode($disciplina->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="disciplina" class="form-control col-sm-8" placeholder="Disciplina" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fa fa-comment"></i> Assunto</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($assuntos as $assunto): ?>
                                <li><?=utf8_encode($assunto->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="assunto" class="form-control col-sm-8" placeholder="Assunto" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fa fa-table"></i> Banca</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($bancas as $banca): ?>
                                <li><?=utf8_encode($banca->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="banca" class="form-control col-sm-8" placeholder="Banca" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row paddingTop7">

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fa fa-home"></i> Instituição</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($instituicoes as $instituicao): ?>
                                <li><?=utf8_encode($instituicao->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="instituicao" class="form-control col-sm-8" placeholder="Instituição" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fa fa-user"></i> Cargo</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($cargos as $cargo): ?>
                                <li><?=utf8_encode($cargo->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="cargo" class="form-control col-sm-8" placeholder="Cargo" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fas fa-university"></i> Área de Formação</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($areas_formacao as $formacao): ?>
                                <li><?=utf8_encode($formacao->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="area_formacao" class="form-control col-sm-8" placeholder="Área de Formação" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row paddingTop7">

                    <div class="col-md-4 filtro">
                        <h2 class="filtroBoxTitle"><i class="fa fa-briefcase"></i> Área de Atuação</h2>
                        <div class="filtroBox">
                            <ul class="filtroUl">
                                <?php foreach($areas_atuacao as $area_atuacao): ?>
                                <li><?=utf8_encode($area_atuacao->valor);?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <form method="POST">
                            <div class="row paddingTop2 cadastrar">
                                <input type="text" name="area_atuacao" class="form-control col-sm-8" placeholder="Área de Atuação" required>
                                <button type="submit" class="botaoCadastrarFiltro col-sm-4">Cadastrar</button>
                            </div>
                        </form>
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
    <script src="public/assets/js/filtros.js"></script>

</body>

</html>