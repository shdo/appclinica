$(document).ready(function(){
    var usuario = $('.usuario').val();
    if(usuario=='medico'){
//        $('.itemSistema').remove();
        //$('.itemDoctor').remove();
        //$('.itemSecretaria').remove();
        $('.subitem1').remove();
        //$('.menu li ul').css({display:block});
    }
    else if(usuario=='secretaria'){
        $('.itemSistema').remove();
//        $('.itemDoctor').remove();
//        $('.itemSecretaria').remove();
        $('.itemDoctor ul .subitem1').remove();
        $('.itemSecretaria ul .subitem1').remove();
    //$('.menu li ul').css({display:block});
    }
});


