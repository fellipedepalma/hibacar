<?php
/* Smarty version 3.1.33, created on 2019-06-15 19:54:35
  from 'C:\xampp\htdocs\hibacar\view\oficinas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d05772b939689_32329854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7872ac2aa67f565da0f47d4a3ff627c74e1f26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\oficinas.tpl',
      1 => 1560639274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d05772b939689_32329854 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OFICINAS']->value, 'O');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['O']->value) {
?>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_id'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_nome'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_descricao'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_logo'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_email'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_pass'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_telefone'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_celular'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_site'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_endereco'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_numero'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_complemento'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_bairro'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_cidade'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['ofc_uf'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['lat'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['O']->value['lng'];?>
</p>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
