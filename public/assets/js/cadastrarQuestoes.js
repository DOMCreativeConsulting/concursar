$(document).ready(function(){

    $('.ce').toggle();

    $('#modalidade').change(function(){

        $('.me').toggle(200);
        $('.ce').toggle(200);

    });
    
});