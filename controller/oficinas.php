<?php

$smarty = new Template();

$oficina = new Oficina();
$oficina->GetOficina();

$smarty->assign('OFICINAS', $oficina->GetItens());
$smarty->display('oficinas.tpl');