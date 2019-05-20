<?php include 'views/partials/head.html'; ?>
<?php include 'views/partials/siteNavbar.php'; ?>
<body>
    <?php 
    
    require 'views/partials/filtro.php';

    if(isset($_POST['maxItens'])){

        $maxItens = $maxItens + $_POST['maxItens'];

    }else{
        $maxItens = 30;
    }

    $quantidade = 0;

    foreach ($questoes as $questao){

        $quantidade++;

        if($quantidade <= $maxItens){

            $questao->modalidade == 'multipla-escolha' ? include 'partials/multiplaEscolha.php' : include 'partials/certoErrado.php';

        }

    }

    ?>


    <script src="public/assets/js/resposta.js"></script>
    <script src="public/assets/js/mobile.js"></script>
    <p style="text-align:center">
        Copyright © 2019 Concursar. Todos os direitos reservados. Desenvolvido com ♥ por <a href="http://dom.com.vc/">DOM</a>.
    </p>

</body>
</html>