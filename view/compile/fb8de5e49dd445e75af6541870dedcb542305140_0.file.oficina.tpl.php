<?php
/* Smarty version 3.1.33, created on 2019-06-18 19:04:00
  from 'C:\xampp\htdocs\hibacar\view\oficina.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d095fd0535289_22045635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb8de5e49dd445e75af6541870dedcb542305140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\oficina.tpl',
      1 => 1560894038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d095fd0535289_22045635 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="meusdados">
    <div class="container">
        <h2 class="titulo_meusdados"><?php echo $_smarty_tpl->tpl_vars['OFC_NOME']->value;?>
</h2>
                <div class="blocos_meusdados">
            <div class="infos_meusdados">
                <h3 class="subtitulo_meusdados">MINHAS INFORMAÇÕES</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC_ENDERECO']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['OFC_NUMERO']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC_BAIRRO']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['OFC_CIDADE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['OFC_UF']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC_CEP']->value;?>
</p>
            </div>
            <div class="infos_meusdados">
                <h3 class="subtitulo_meusdados">MEUS CONTATOS</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC_FONE']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC_CELULAR']->value;?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['OFC_EMAIL']->value;?>
</p>
            </div>
        </div>
    </div>

</section><?php }
}
