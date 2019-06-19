<?php
/* Smarty version 3.1.33, created on 2019-06-18 19:04:00
  from 'C:\xampp\htdocs\hibacar\view\menu_oficina.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d095fd04d13e5_76147754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c9d537e0e5ba6a6a2126905f555ba9c25e071f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\menu_oficina.tpl',
      1 => 1560895434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d095fd04d13e5_76147754 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="espacador"></div>
<header class="header__carrinho container">
  <div class="header__carrinho--esquerda">
    <h2>Minha Conta</h2>
  </div>
  <div class="header__carrinho--direita">
    <p>Olá <b><?php echo $_smarty_tpl->tpl_vars['OFC']->value;?>
</b>, seja bem vindo!</p>
  </div>
</header>

<nav class="menu__cliente container">
  <ul class="menu__cliente--lista">
    <li class="menu__cliente--item">
      <a class="menu__cliente--link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTA']->value;?>
">Minha Conta</a>
    </li>
    <li class="menu__cliente--item">
      <a class="menu__cliente--link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_OFICINA_DADOS']->value;?>
">Editar Meus Dados</a>
    </li>
    <li class="menu__cliente--item">
      <a class="menu__cliente--link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_OFICINA_SENHA']->value;?>
">Alterar Senha</a>
    </li>
    <li class="menu__cliente--item">
      <a class="menu__cliente--link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
">Sair</a>
    </li>

  </ul>
</nav>
<?php }
}
