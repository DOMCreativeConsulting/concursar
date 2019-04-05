<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtro</title>
</head>
<body>
    <?php 
    
    require 'filtro.php';

    foreach ($resultado as $questao):
    
    ?>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="atributes">
                <span>Id: <?=$questao->id;?></span>
                <span>Ano: <?=$questao->ano;?></span>
                <span>Banca: <?=$questao->banca;?></span>
            </div>
            <div class="questao">
                <p>Questão: <?=$questao->questao;?></p>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <?php endforeach; ?>

</body>
</html>