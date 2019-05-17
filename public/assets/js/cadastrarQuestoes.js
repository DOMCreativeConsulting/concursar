$(document).ready(function(){

    $('.vf').toggle();

    $('#modalidade').change(function(){
        if($('#modalidade').val() == 'multipla-escolha'){
            $('.vf').toggle(200);
            $('.me').toggle(200);
        }
        if($('#modalidade').val() == 'vouf'){
            $('.vf').toggle(200);
            $('.me').toggle(200);
        }
    });
    
});