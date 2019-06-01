<?php
/* Smarty version 3.1.33, created on 2019-05-03 03:09:08
  from 'C:\xampp\htdocs\hibacar\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ccb94b4a52284_82061673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b658c441c0da1ecda52696933f38525b61d6cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\index.tpl',
      1 => 1556845747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ccb94b4a52284_82061673 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/site.css">
    <title>Hibacar</title>
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
                <a href="#">2</a>
            </li>
            <li class="menu-superior-item">
                <img src="media/imagens/logo_hibacar.png" alt="">
            </li>
            <li class="menu-superior-item">
                <a href="#">3</a>
            </li>
            <li class="menu-superior-item">
                <a href="#">4</a>
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
