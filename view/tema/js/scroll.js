jQuery(function () {
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 400) {
            $(".cabecalho").addClass("cabecalho--transparente")
        }else{
            $(".cabecalho").removeClass("cabecalho--transparente")
        }
    });
});