<?php
date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
    session_start();
}
require './lib/autoload.php';

$smarty = new Template();

// Valores para o Template
$smarty->assign('NOME-SITE', "HibaCar");
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_LOGIN', Rotas::pag_Login());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado()){
    $smarty->assign('OFC', $_SESSION['OFC']['ofc_nome']);
}

$smarty->display('index.tpl');