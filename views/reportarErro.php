<?php include 'views/partials/head.html'; ?>
<?php include 'views/partials/siteNavbar.php'; ?>
<body>
    
    <form action="reportar" method="POST">
        <div class="col-md-6 offset-md-3 reportarErro">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="text-align:center;"><i class="fa fa-flag"></i> Reportar Erro</h1>
                </div>
                <div class="col-md-8 offset-md-2 pTop3">
                    <input type="hidden" name="questaoId" value="<?=$_POST['id'];?>">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" placeholder="Nome completo" class="form-control">
                </div>
                <div class="col-md-8 offset-md-2 pTop2">
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="exemplo@email.com" class="form-control">
                </div>
                <div class="col-md-8 offset-md-2 pTop2">
                    <label for="categoria">Categoria: </label>
                    <select class="form-control" name="categoria">
                        <option value="gramatica">Erro Gramatical</option>
                        <option value="resposta">Resposta Incorreta</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
                <div class="col-md-8 offset-md-2 pTop2">
                    <label for="titulo">Título: </label>
                    <input type="text" name="titulo" class="form-control">
                </div>
                <div class="col-md-8 offset-md-2 pTop2">
                    <label for="mensagem">Mensagem: </label>
                    <textarea name="mensagem" placeholder="Descreva o ocorrido..." rows="5" class="form-control"></textarea>
                </div>
                <div style="padding-bottom:4%;" class="col-md-4 offset-md-4 pTop2">
                    <button type="submit" class="form-control">Enviar</button>                
                </div>
            </div>
        </div>
    </form>

    <p style="text-align:center;padding-top:3%;">
        Copyright © 2019 Concursar. Todos os direitos reservados. Desenvolvido com ♥ por <a href="http://dom.com.vc/">DOM</a>.
    </p>

</body>
</html>