$(document).ready(function(){

    $('.inputUser').hide();
    $('.botaoUser').hide();
    $('.subMenu').hide();
    $('.hierarquia').hide();
    $('.botaoHierarquia').hide();

});

function showSub(){

    $('.subMenu').toggle(300);
    $('.hierarquia').hide(300);
    $('.botaoHierarquia').hide(300);
    $('.botaoUser').hide(300);
    $('.inputUser').hide(300);

}

function rename(){

    $('.botaoUser').toggle(300);
    $('.inputUser').toggle(300);
    $('.subMenu').hide(300);
    $('.hierarquia').hide(300);
    $('.botaoHierarquia').hide(300);

}

function hierarquia(){

    $('.hierarquia').toggle(300);
    $('.botaoHierarquia').toggle(300);
    $('.subMenu').hide(300);
    $('.botaoUser').hide(300);
    $('.inputUser').hide(300);

}