<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">
    <?php include 'partials/navbar.php'; ?>
        <div class="page-content--bgf7">
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">Você está acessando:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Concursar</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Painel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-2">
                                <span><?php
                                setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' ); 
                                date_default_timezone_set( 'America/Sao_Paulo' );
                                echo strftime( '%e/%m/%Y ', strtotime('now')); 
                                ?></span>
                            </h1>
                            <hr class="line-seprate">
                            <h1 class="title-4 paddingTop2">Bem Vindo
                                <span><?=$_SESSION['user']?></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $nQuestoes = 0;
            foreach($questoes as $questao){
                $nQuestoes++;
            }

            $nUsuarios = 0;
            foreach($usuarios as $usuario){
                $nUsuarios++;
            }

            $nFiltros = 0;
            foreach($filtros as $filtro){
                $nFiltros++;
            }
            ?>

            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number"><?=$nQuestoes?></h2>
                                <span class="desc">Questões Cadastradas</span>
                                <div class="icon">
                                    <i class="fa fa-copy"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?=$nUsuarios?></h2>
                                <span class="desc">Usuários Cadastrados</span>
                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?=$nFiltros?></h2>
                                <span class="desc">Opções de Filtro Cadastradas</span>
                                <div class="icon">
                                    <i class="fa fa-filter"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- COPYRIGHT-->
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