$(function(){
    $('nav.mobile').click(function(){ // dblclick
        var listaMenu = $('nav.mobile ul');
        var icone = $('.botao-menu-mobile').find('i');
        
        /** 
        * ABERTURA COM fadeIn()
        * if(listaMenu.is(':hidden') == true)
                listaMenu.fadeIn();
          else
                listaMenu.fadeOut();
        */

        /**
        * ABERTURA E FECHAMENTO SEM EFEITO
        * if(listaMenu.is(':hidden') == true) {
                listaMenu.show();
          else
                listaMenu.hide();
        */

        if(listaMenu.is(':hidden') == true) {
            icone.removeClass('fa-bars');
            icone.addClass('fa-xmark');
            listaMenu.slideToggle();
        } else {
            icone.removeClass('fa-xmark');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    })
})