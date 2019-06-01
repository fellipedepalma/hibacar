<?php

require './lib/autoload.php';

$smarty = new Template();

// Valores para o Template
$smarty->assign('NOME-SITE', "HibaCar");
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$smarty->display('index.tpl');