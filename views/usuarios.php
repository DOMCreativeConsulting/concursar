<?php include 'partials/painelHead.html'; ?>
<body class="animsition">
    <div class="page-wrapper">

        <?php include 'partials/navbar.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <ul class="usersBox">
                        <?php
                        foreach($usuarios as $user):
                        ?>
                        <li>
                            <div class="row">
                                <div class="col-lg-7">
                                    <b><?=$user->nome;?></b> - <?=$user->hierarquia;?>
                                </div>
                                <div class="col-lg-5">
                                    <form method="POST" action="deletar">
                                        <button type="submit" name="user" value="<?=$user->id;?>" class="botao-deletar" href="#">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                        <button type="submit" name="user" id="<?=$user->id;?>" onclick="showSub();" value="<?=$user->id;?>" class="botao-editar" href="#">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <div class="subMenu">
                                            <ul style="list-style:none;">
                                                <li><a onclick="rename();" href="#">Renomear</a></li>
                                                <li><a onclick="hierarquia();" href="#">Alterar hierarquia</a></li>
                                            </ul>
                                        </div>
                                    <form method="POST" action="rename">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="text" class="inputUser <?=$user->id;?>" id="<?=$user->id;?>" value="<?=$user->nome;?>" name="userValue" placeholder="novo valor..." required>
                                            </div>
                                            <div class="col-md-4">
                                                <button style="float:right;" type="submit" id="<?=$user->id;?>" name="user" value="<?=$user->id;?>" class="botaoUser <?=$user->id;?>" href="#">
                                                    Salvar
                                                </button>
                                            </div>                                                                                                                                   
                                        </div>
                                    </form>

                                    <form method="POST" action="rename">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <select class="hierarquia" name="hierarquia">
                                                    <option value="admin">Admin</option>
                                                    <option value="member">Membro</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <button style="float:right;" type="submit" id="<?=$user->id;?>" name="user" value="<?=$user->id;?>" class="botaoHierarquia" href="#">
                                                    Atualizar
                                                </button>
                                            </div>                                                                                                                                   
                                        </div>
                                    </form>

                                </div>
                            </div>
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
    <script src="public/assets/js/usuarios.js"></script>

</body>

</html>