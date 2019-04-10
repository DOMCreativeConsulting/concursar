$(document).ready(function(){

    $("#disciplinas").submit(function(e){

        e.preventDefault();

        var inputs = $(this).serialize();

        $.post("cadastrarFiltros", inputs, function(){
            $(".disciplinas").load("teste");
        });

    });

});