<?php
/* Smarty version 3.1.33, created on 2019-06-13 18:28:28
  from 'C:\xampp\htdocs\hibacar\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d02bffc94bd75_37517885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b658c441c0da1ecda52696933f38525b61d6cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\index.tpl',
      1 => 1560461306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d02bffc94bd75_37517885 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/site.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/home.css">

    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"><?php echo '</script'; ?>
>

    <title>Hibacar | Home</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="menu-superior container">
            <ul class="menu-superior-lista">
                <li class="menu-superior-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="menu-superior-link">Home</a>
                </li>
                <li class="menu-superior-item">
                    <a href="#comofunciona" class="menu-superior-link">Como Funciona</a>
                </li>
                <li class="menu-superior-item logo-absolute">
                    <a href="#" class="menu-superior-link">
                        <img src="media/imagens/logo_hibacar.png" alt="Logo Hibacar" class="logo-hb">
                    </a>
                </li>
                <li class="menu-superior-item sumir">
                </li>
                <li class="menu-superior-item">
                    <a href="#servicos" class="menu-superior-link">Serviços</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == false) {?>
                <li class="menu-superior-item menu-superior-item_relativo">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="menu-superior-link">Login</a>
                    <ul class="submenu-lista">
                        <li class="submenu-item">
                            <a class="submenu-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
">Login</a>
                        </li>
                        <li class="submenu-item">
                            <a class="submenu-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                    <li class="menu-superior-item menu-superior-item_relativo">
                    <a class="menu-superior-link ">Olá: <?php echo $_smarty_tpl->tpl_vars['OFC']->value;?>
</a>
                    <ul class="submenu-lista">
                        <li class="submenu-item">
                            <a class="submenu-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
">Minha Conta</a>
                        </li>
                        <li class="submenu-item">
                            <a class="submenu-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">Sair</a>
                        </li>
                    </ul>
                    </li><?php }?>
            </ul>
        </nav>
    </header>

    <?php 
        Rotas::get_Pagina();
    ?>

    <footer class="rodape">
        <div class="container">
            <div class="conteudo-rodape">
                <section class="mapadosite">
                    <h2>Mapa do Site</h2>
                    <nav>
                        <ul>
                            <li>Home</li>
                            <li>Quem Somos</li>
                            <li>Como Funciona</li>
                            <li>Serviços</li>
                            <li>Login</li>
                        </ul>
                    </nav>
                </section>
                <section class="contatos">
                    <h2>Contatos</h2>
                    <p>+55 11 9 9999-8888</p>
                    <p>contato@hibacar.com.br</p>
                    <p>Av. Eng. Eusébio Stevaux, 823<br>
                       Santo Amaro, São Paulo - SP, 04696-000</p>
                </section>
                <section class="faleconosco">
                    <h2>Fale Conosco</h2>
                    <form action="" method="post" class="form-faleconosco">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem"></textarea>
                    </form>
                </section>
            </div>
        </div>
    </footer>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/scroll.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
