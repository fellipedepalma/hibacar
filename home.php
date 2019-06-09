<?php
$smarty = new Template();

$servicos = new Servicos();
$servicos->GetServicos();

//var_dump($servicos->GetServicos());

$smarty->assign('SERVICOS', $servicos->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->display('home.tpl');
