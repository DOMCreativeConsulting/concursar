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
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Minha Conta</li>
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
                        <div class="col-md-6 offset-md-3 shadow">
                            <h1 style="text-align:center;font-weight:300;">ALTERAR SENHA</h1>
                            <form action="change-password" id="alterar-senha" method="post">
                                <input type="hidden" name="id" value="<?=$_SESSION['id'];?>">
                                <div class="row">
                                    <label for="senha-atual">Senha atual: </label>
                                    <input type="password" value="<?=$usuario[0]->password;?>" id="senha-atual" name="senha-atual" class="form-control col-md-11">
                                    <button type="button" id="show-password" class="form-control col-md-1"><i class="fa fa-eye"></i></button>
                                </div>
                                <div class="row">
                                    <label for="nova-senha">Nova senha: </label>
                                    <input type="password" name="nova-senha" id="nova-senha" class="form-control col-md-11" required>
                                    <button type="button" id="show-new-password" class="form-control col-md-1"><i class="fa fa-eye"></i></button>
                                </div>
                                <div class="row">
                                    <label for="repita-senha">Repita senha: </label>
                                    <input type="password" name="repita-senha" id="repita-senha" class="form-control col-md-12" required>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <button type="button" id="alterar" class="form-control col-md-3">Alterar</button>
                                </div>
                            </form>
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
    <script src="public/assets/js/alterarSenha.js"></script>

</body>

</html>