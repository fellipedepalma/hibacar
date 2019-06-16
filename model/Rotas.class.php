<?php
Class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    static function get_SiteTEMA(){
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }

    static function pag_BuscarOficina(){
        return self::get_SiteHOME() . '/buscaroficina';
    }

    static function pag_OficinaInfo(){
        return self::get_SiteHOME() . '/oficinainfo';
    }

    static function pag_Oficinas(){
        return self::get_SiteHOME() . '/oficinas';
    }

    static function pag_CadastroOficina(){
        return self::get_SiteHOME() . '/cadastrooficina';
    }

    static function pag_Login(){
        return self::get_SiteHOME() . '/login';
    }

    static function pag_Logoff(){
        return self::get_SiteHOME() . '/logoff';
    }

    static function pag_Oficina(){
        return self::get_SiteHOME() . '/oficina';
    }

    static function get_ImagemPasta(){
        return 'media/imagens/';
    }

    static function get_ImgURL(){
        return self::get_SiteHOME() . '/' . self::get_ImagemPasta();
    }

    // MÉTODO REDIRECIOMANETO
    static function Redirecionar($tempo, $pagina){
        $url = '<meta http-equiv="refresh" content="'.$tempo.';
      url='.$pagina.'">';
        echo $url;
    }

    static function get_Pagina(){
        if(isset($_GET['pag'])) {
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            $pagina = 'controller/' . self::$pag[0] . '.php';

            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
            }
        }else{
            include 'home.php';
        }
    }
}