<?php include 'views/partials/head.html'; ?>
<?php include 'views/partials/siteNavbar.php'; ?>
<body>
    <?php 
    
    require 'views/partials/filtro.php';

    foreach ($resultado as $questao):
    
        $questao->modalidade == 'multipla-escolha' ? include 'partials/multiplaEscolha.php' : include 'partials/certoErrado.php';

    endforeach; ?>
    
    <script src="public/assets/js/resposta.js"></script>
    <script src="public/assets/js/mobile.js"></script>
    <p style="text-align:center">
        Copyright © 2019 Concursar. Todos os direitos reservados. Desenvolvido com ♥ por <a href="http://dom.com.vc/">DOM</a>.
    </p>

</body>
</html>