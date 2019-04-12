<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="#">
                    <img src="public/assets/img/concursar_logo.png" width="200px" alt="CONCURSAR" />
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    <li class="has-sub">
                        <a href="painel">
                            <i class="fas fa-tachometer-alt"></i>Painel
                            <span class="bot-line"></span>
                        </a>
                    </li>
                    <li>
                        <a href="cadastrarQuestoes">
                            <i class="fas fa-copy"></i>
                            <span class="bot-line"></span>Questões</a>
                    </li>
                    <li>
                        <a href="cadastrarFiltros">
                            <i class="fas fa-filter"></i>
                            <span class="bot-line"></span>Filtros</a>
                    </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?=$_SESSION['user']?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="email-user">
                                    <span class="email"><?=$_SESSION['email']?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Conta</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Configurações</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="logout">
                                    <i class="zmdi zmdi-power"></i>Sair</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->

<!-- HEADER MOBILE-->
<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="#">
                    <img src="public/assets/img/concursar_logo.png" width="200px"  alt="CONCURSAR" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Painel</a>
                </li>
                <li>
                    <a href="cadastrarQuestoes">
                        <i class="fas fa-copy"></i>Questoes</a>
                </li>
                <li>
                    <a href="cadastrarFiltros">
                        <i class="fas fa-filter"></i>Filtros</a>
                </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">
        <div class="account-wrap">
            <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="content">
                    <a class="js-acc-btn" href="#"><?=$_SESSION['user']?></a>
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="email-user">
                            <span class="email"><?=$_SESSION['email']?></span>
                        </div>
                    </div>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-account"></i>Conta</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-settings"></i>Configurações</a>
                        </div>
                    </div>
                    <div class="account-dropdown__footer">
                        <a href="logout">
                            <i class="zmdi zmdi-power"></i>Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>