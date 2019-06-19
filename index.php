<?php
date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
    session_start();
}
require './lib/autoload.php';

$smarty = new Template();

if(isset($_POST['enviar'])){
    // Dados do Erro!
    $msg_erro = false;
    $assunto  = "Contato HibaCar " . date("d-m-Y");

    // Verifica se foi passado valor via POST
    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $msg_erro = 'Nada foi postado.';
    }
    //Cria variaveis dinamicamente
    // Cria as variáveis dinamicamente
    foreach ( $_POST as $chave => $valor ) {
        // Remove todas as tags HTML
        // Remove os espaços em branco do valor
        $$chave = trim( strip_tags( $valor ) );

        // Verifica se tem algum valor nulo
        if ( empty ( $valor ) ) {
            $msg_erro = 'Existem campos em branco.';
        }
    }

    // Verifica se existe e-mail e se é um e-mail.
    if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) && !erro){
        $msg_erro = 'Insira um e-mail válido.';
    }

    if ($msg_erro){
        echo $msg_erro;
    }else{
        $enviarEmail = new EnviarEmail();
        $destinatarios = array(Config::EMAIL_SITE_ADM);
        $enviarEmail->Enviar($assunto, $mensagem_validado, $destinatarios);

        echo "E-mail enviado com sucesso!";
        foreach ( $_POST as $chave => $valor ) {
            echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
        }
    }
}


// Valores para o Template
$smarty->assign('NOME-SITE', "HibaCar");
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$smarty->assign('PAG_LOGIN', Rotas::pag_Login());
$smarty->assign('PAG_CADASTROOFC', Rotas::pag_CadastroOficina());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado()){
    $smarty->assign('OFC', $_SESSION['OFC']['ofc_nome']);
}

$smarty->display('index.tpl');