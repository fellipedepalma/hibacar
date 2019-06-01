<?php
/* Smarty version 3.1.33, created on 2019-05-31 05:18:13
  from 'C:\xampp\htdocs\hibacar\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf09cf59550f7_50895407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ac9dd46834a4b6aeafdfc07a3c14fb83dd0e88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\home.tpl',
      1 => 1559272671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf09cf59550f7_50895407 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="hero">
</section>

<section class="comofunciona">
    <div class="container">
        <h2 class="titulos">COMO FUNCIONA</h2>
        <div class="cards">
            <div class="card-como-funciona">
                <i class="fas fa-mouse-pointer"></i>
                Selecione o Serviço abaixo.
            </div>
            <img src="media/imagens/arrow-right.svg" alt="">
            <div class="card-como-funciona">
                Card 2
            </div>
            <img src="media/imagens/arrow-right.svg" alt="">
            <div class="card-como-funciona">
                Card 3
            </div>
        </div>
    </div>
</section>

<section class="servicos">
    <div class="container">
        <h2 class="titulos">SERVIÇOS</h2>
        <div class="cards-serv">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVICOS']->value, 'S');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['S']->value) {
?>
                <div class="card-servicos">
                    <?php echo $_smarty_tpl->tpl_vars['S']->value['serv_nome'];?>

                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
    </div>
</section>

<footer class="rodape">

</footer><?php }
}
