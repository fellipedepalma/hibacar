<?php
$smarty = new Template();

if(Login::Logado()){
    $smarty->assign('OFC_ID', $_SESSION['OFC']['ofc_id']);
    $smarty->assign('OFC_NOME', $_SESSION['OFC']['ofc_nome']);
    $smarty->assign('OFC_DESC', $_SESSION['OFC']['ofc_descricao']);
    $smarty->assign('OFC_LOGO', $_SESSION['OFC']['ofc_logo']);
    $smarty->assign('OFC_EMAIL', $_SESSION['OFC']['ofc_email']);
    $smarty->assign('OFC_FONE', $_SESSION['OFC']['ofc_telefone']);
    $smarty->assign('OFC_CELULAR', $_SESSION['OFC']['ofc_celular']);
    $smarty->assign('OFC_SITE', $_SESSION['OFC']['ofc_site']);
    $smarty->assign('OFC_ENDERECO', $_SESSION['OFC']['ofc_endereco']);
    $smarty->assign('OFC_NUMERO', $_SESSION['OFC']['ofc_numero']);
    $smarty->assign('OFC_COMPL', $_SESSION['OFC']['ofc_complemento']);
    $smarty->assign('OFC_BAIRRO', $_SESSION['OFC']['ofc_bairro']);
    $smarty->assign('OFC_CIDADE', $_SESSION['OFC']['ofc_cidade']);
    $smarty->assign('OFC_UF', $_SESSION['OFC']['ofc_uf']);
    $smarty->assign('OFC_CEP', preg_replace("/^(\d{5})(\d{3})$/", "\\1-\\2",$_SESSION['OFC']['ofc_cep']));
    $smarty->assign('LAT', $_SESSION['OFC']['lat']);
    $smarty->assign('LNG', $_SESSION['OFC']['lng']);

    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
    Login::MenuOficina();
}

$oficina = new Oficina();
$oficina->GetOficina();


//$smarty->assign('OFC', '');
//if(Login::Logado()){
//    $smarty->assign('OFC', $_SESSION['OFC']['ofc_nome']);
//    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
//}
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('OFICINA', $oficina->GetItens());
$smarty->assign('LOGADO', Login::Logado());
$smarty->display('oficina.tpl');