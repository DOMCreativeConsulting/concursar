/*$(document).ready(function(){

    $("#disciplinas").submit(function(e){

        e.preventDefault();

        var data = $(this).serialize();

        alert(data);

        $.post("teste", data, function(){
            $(".disciplinas").load("teste");
        });

    });

});