<?php

$smarty = new Template();

Login::MenuOficina();

foreach($_SESSION['OFC'] as $campo => $valor){
    $smarty->assign(strtoupper($campo), $valor);
}
//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';
if(isset($_POST['ofc_nome']) and isset($_POST['ofc_email'])) {

    $ofc_nome        = $_POST['ofc_nome'];
    $ofc_descricao   = $_POST['ofc_descricao'];
    $ofc_logo        = 'logo-padrao.png';
    $ofc_email       = $_POST['ofc_email'];
    $ofc_pass        = $_SESSION['OFC']['ofc_pass'];
    $ofc_telefone    = $_POST['ofc_telefone'];
    $ofc_celular     = $_POST['ofc_celular'];
    $ofc_site        = $_POST['ofc_site'];
    $ofc_endereco    = $_POST['ofc_endereco'];
    $ofc_numero      = $_POST['ofc_numero'];
    $ofc_complemento = $_POST['ofc_complemento'];
    $ofc_bairro      = $_POST['ofc_bairro'];
    $ofc_cidade      = $_POST['ofc_cidade'];
    $ofc_uf          = $_POST['ofc_uf'];
    $ofc_cep         = $_POST['ofc_cep'];
    $lat             = $_POST['lat'];
    $lng             = $_POST['lng'];

    if($_SESSION['OFC']['ofc_pass'] != /*md5(*/$ofc_pass/*)*/){
        echo '<div class="container">Sua senha está incorreta, tente novamente!';
        //Sistema::VoltarPagina();
        echo '</div>';
        exit();
    }

    $oficina = new Oficina();

    $oficina->Preparar($ofc_nome, $ofc_descricao, $ofc_logo, $ofc_email, $ofc_pass, $ofc_telefone, $ofc_celular, $ofc_site, $ofc_endereco, $ofc_numero, $ofc_complemento, $ofc_bairro, $ofc_cidade, $ofc_uf, $ofc_cep, $lat, $lng);

    if(!$oficina->Editar($_SESSION['OFC']['ofc_id'])){
        echo '<div class="container">Erro ao editar os dados.</div>';
        exit();
    }else{
        echo '<div class="container">Dados alterados com sucesso!<br>
      Atualizando os dados de login...</div>';

        $login = new Login();
        $login->GetLogin($ofc_email, $ofc_pass);
    }

}else{
    $smarty->display('oficina-dados.tpl');
}