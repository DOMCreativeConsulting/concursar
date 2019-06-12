$(document).ready(function(){

    $("#show-password").mousedown(function(){
        $("#senha-atual").prop("type","text");
    });
    $("#show-password").mouseup(function(){
        $("#senha-atual").prop("type","password");
    });

    $("#show-new-password").mousedown(function(){
        $("#nova-senha").prop("type","text");
    });
    $("#show-new-password").mouseup(function(){
        $("#nova-senha").prop("type","password");
    });

    $('#alterar').click(function(){
        if($("#nova-senha").val() == $("#repita-senha").val()){
            $("#alterar-senha").submit();
        }else{
            alert("As senhas não são identicas!");
        }
    });

});