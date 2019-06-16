<?php
$smarty = new Template();

if(Login::Logado()){
    $smarty->assign('OFC', $_SESSION['OFC']['ofc_nome']);
}

//$smarty->assign('OFC', '');
//if(Login::Logado()){
//    $smarty->assign('OFC', $_SESSION['OFC']['ofc_nome']);
//    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
//}

$smarty->assign('LOGADO', Login::Logado());
$smarty->display('oficina.tpl');