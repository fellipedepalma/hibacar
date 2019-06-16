jQuery(function () {
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 400) {
            $(".cabecalho").addClass("cabecalho--transparente");
            $(".logo-hb").attr("src", "media/imagens/logo_hibacar_h.png");
            $(".logo-absolute").css("top", 0);
        }else{
            $(".cabecalho").removeClass("cabecalho--transparente");
            $(".logo-hb").attr("src", "media/imagens/logo_hibacar.png");
            $(".logo-absolute").css("top", "-30%");
        }
    });
});