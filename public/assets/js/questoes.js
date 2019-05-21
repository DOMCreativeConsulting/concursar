$(document).ready(function(){

    $('.hide').hide();

});

function rename(objeto){

    var id = objeto.id;

    $(`#editar-${id}`).toggle(300);

}