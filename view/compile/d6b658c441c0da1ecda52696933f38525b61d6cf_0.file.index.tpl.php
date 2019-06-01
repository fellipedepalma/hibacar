<?php
/* Smarty version 3.1.33, created on 2019-05-31 03:13:47
  from 'C:\xampp\htdocs\hibacar\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf07fcb091ec7_80026958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b658c441c0da1ecda52696933f38525b61d6cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\index.tpl',
      1 => 1559265225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf07fcb091ec7_80026958 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/site.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/home.css">

    <title>Hibacar | Home</title>
</head>
<body>
<header class="cabecalho">
    <nav class="menu-superior container">
        <ul class="menu-superior-lista">
            <li class="menu-superior-item">
                <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a>
            </li>
            <li class="menu-superior-item">
                <a href="#">Como Funciona</a>
            </li>
            <li class="menu-superior-item logo-absolute">
                <img src="media/imagens/logo_hibacar.png" alt="">
            </li>
            <li class="menu-superior-item">
            </li>
            <li class="menu-superior-item">
                <a href="#">Serviços</a>
            </li>
            <li class="menu-superior-item">
                <a href="#">Login</a>
            </li>
        </ul>
        
    </nav>
</header>

<?php 
    Rotas::get_Pagina();
?>
<footer class="rodape">

</footer>
</body>
</html><?php }
}
