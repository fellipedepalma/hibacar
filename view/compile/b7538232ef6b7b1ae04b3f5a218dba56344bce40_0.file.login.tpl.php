<?php
/* Smarty version 3.1.33, created on 2019-06-13 23:04:57
  from 'C:\xampp\htdocs\hibacar\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d02ba790d29c3_51158831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7538232ef6b7b1ae04b3f5a218dba56344bce40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\login.tpl',
      1 => 1560459688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d02ba790d29c3_51158831 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {
} else { ?>

<section class="login-oficinas">
    <div class="container">
        <div class="login">
            <form name="formulario_login" method="post" action="" class="formulario-login">
                <h1 class="titulo-login">LOGIN</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC']->value;?>
</p>
                <label for="email">E-mail</label>
                <input type="email" class="campo-login" name="txt_email" placeholder="E-mail" id="login" required autocomplete="off">
                <label for="senha">Senha</label>
                <input type="password" class="campo-login" name="txt_senha" placeholder="Senha" id="senha" required autocomplete="off">
                                <button class="botao botao-normal">Entrar</button>
                            </form>
        </div>
    </div>
</section>
<?php }
}
}
