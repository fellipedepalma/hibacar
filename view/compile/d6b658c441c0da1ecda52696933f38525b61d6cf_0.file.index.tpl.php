<?php
/* Smarty version 3.1.33, created on 2019-06-18 20:57:30
  from 'C:\xampp\htdocs\hibacar\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d097a6a6715d9_33528775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b658c441c0da1ecda52696933f38525b61d6cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\index.tpl',
      1 => 1560902248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d097a6a6715d9_33528775 (Smarty_Internal_Template $_smarty_tpl) {
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

    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/ea13fbeaa1.js"><?php echo '</script'; ?>
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
#comofunciona" class="menu-superior-link">Como Funciona</a>
                </li>
                <li class="menu-superior-item logo-absolute">
                    <a href="#" class="menu-superior-link">
                        <img src="media/imagens/logo_hibacar.png" alt="Logo Hibacar" class="logo-hb">
                    </a>
                </li>
                <li class="menu-superior-item sumir">
                </li>
                <li class="menu-superior-item">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
#servicos" class="menu-superior-link">Serviços</a>
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
                            <a class="submenu-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTROOFC']->value;?>
">Cadastrar</a>
                        </li>
                    </ul>
                </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                    <li class="menu-superior-item menu-superior-item_relativo">
                    <a class="menu-superior-link "><?php echo $_smarty_tpl->tpl_vars['OFC']->value;?>
</a>
                    <ul class="submenu-lista">
                        <li class="submenu-item">
                            <a class="submenu-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
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
                    <h2 class="titulo-rodape">Mapa do Site</h2>
                    <nav>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a></li>
                            <li><a href="">Quem Somos</a></li>
                            <li><a href="">Como Funciona</a></li>
                            <li><a href="">Serviços</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
">Login</a></li>
                        </ul>
                    </nav>
                </section>
                <section class="contatos">
                    <h2 class="titulo-rodape">Contatos</h2>
                    <p><i class="fas fa-mobile-alt"></i> +55 11 9 9999-8888</p>
                    <p><i class="fas fa-envelope"></i> contato@hibacar.com.br</p>
                    <p><i class="fas fa-map-marker-alt"></i> Av. Eng. Eusébio Stevaux, 823<br>
                       Santo Amaro, São Paulo - SP, 04696-000</p>
                </section>
                <section class="faleconosco">
                    <h2 class="titulo-rodape">Fale Conosco</h2>
                    <h3><?php echo '<?php ';?>echo $_SESSION['sucess']<?php echo '?>';?></h3>
                    <form action="" method="post" class="form-faleconosco">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem"></textarea>
                        <button type="submit" name="enviar" class="botao botao-normal">Enviar</button>
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
