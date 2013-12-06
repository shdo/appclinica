$(document).ready(function(){
    var usuario = $('.usuario').val();
    if(usuario=='medico'){
        $('.subitem1').remove();
    }
    else if(usuario=='secretaria'){
        $('.itemDoctor ul .subitem1').remove();
        $('.itemSecretaria ul .subitem1').remove();
        $('.itemSistema ul .subitem1').remove();
    }
    
    if($('input[name=hdnpacienteid]').val()==''){
    	$('.tabs .enfermedad').hide();
    	$('.tabs .informe').hide();
    	
    }
    else {
    	
    	$('.tabs .enfermedad').show();
    	$('.tabs .informe').show();
    }
});


