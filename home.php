<?php
$smarty = new Template();

$servicos = new Servicos();
$servicos->GetServicos();

$oficina = new Oficina();
$oficina->GetOficina();

//var_dump($servicos->GetServicos());

$smarty->assign('OFICINA', $oficina->GetItens());
$smarty->assign('SERVICOS', $servicos->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->display('home.tpl');
