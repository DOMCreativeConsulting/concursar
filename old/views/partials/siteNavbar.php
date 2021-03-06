<header class="header-desktop3 d-none d-lg-block">
    <div class="row" style="padding:1%;">
        <div style="margin:0 auto;">
            <ul>
                <li class="item logo"><a href="http://concursarcoaching.com.br"><img src="public/assets/img/concursar_logo2.png" width="150px"></a></li>
                <li class="item mTop2"><a href="http://concursarcoaching.com.br">Home</a></li>
                <li class="item mTop2"><a href="http://concursarcoaching.com.br/sobre">Sobre</a></li>
                <li class="item mTop2"><a href="http://concursarcoaching.com.br/servicos">Serviços</a></li>
                <li class="item selecionado mTop2"><a href="http://concursarcoaching.com.br/questoes">Questões</a></li>
                <li class="item mTop2"><a href="http://concursarcoaching.com.br/blog">Blog</a></li>
                <li class="item mTop2"><a href="http://concursarcoaching.com.br/contato">Contato</a></li>
                <li class="item mTop2">
                    <div class="elementor-social-icons-wrapper">
                        <a class="facebookIcon" href="https://www.facebook.com/Concursar-Coaching-para-Concursos-267061960846310/" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="instagramIcon" href="https://www.instagram.com/concursar.coaching/" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <p class="login">
            <?php @session_start(); if(!isset($_SESSION['logado'])){ ?>
                <p class="login"><a href="login"><i class="fa fa-lock"></i> Login</a> | <a href="cadastrar"><i class="fa fa-user-plus"></i> Cadastre-se</a></p>
            <?php }else {  ?>
                <p class="login"><a href="painel">Painel</a> | <a href="logout">Sair</a></p>
            <?php } ?>
        </p>
    </div>
</header>

<header class="mobile-navbar">
<div class="topnav">
    <a class="active" href="http://concursarcoaching.com.br"><img src="public/assets/img/concursar_logo.png" width="150px"></a>
<div id="myLinks">
    <a href="http://concursarcoaching.com.br">Home</a>
    <a href="http://concursarcoaching.com.br/sobre">Sobre</a>
    <a href="http://concursarcoaching.com.br/servicos">Serviços</a>
    <a href="http://concursarcoaching.com.br/questoes">Questões</a>
    <a href="http://concursarcoaching.com.br/blog">Blog</a>
    <a href="http://concursarcoaching.com.br/contato">Contato</a>
            <?php @session_start(); if(!isset($_SESSION['logado'])){ ?>
                <p class=""><a href="login"><i class="fa fa-lock"></i> Login</a>
                <a href="cadastrar"><i class="fa fa-user-plus"></i> Cadastre-se</a></p>
            <?php }else {  ?>
                <p class=""><a href="painel">Painel</a> | <a href="logout">Sair</a></p>
            <?php } ?>
</div>
    <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
        <i class="fa fa-bars"></i>
    </a>
</div>
</header>