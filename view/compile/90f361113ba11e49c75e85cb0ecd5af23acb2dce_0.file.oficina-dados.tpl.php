<?php
/* Smarty version 3.1.33, created on 2019-06-18 19:47:17
  from 'C:\xampp\htdocs\hibacar\view\oficina-dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0969f5d30d07_40139027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f361113ba11e49c75e85cb0ecd5af23acb2dce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\oficina-dados.tpl',
      1 => 1560898034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0969f5d30d07_40139027 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="container">
    <section class="painel-principal">
        <header class="cabecalho-painel-principal">
            <div class="titulos-painel-principal">
                <h3 class="subtitulo-painel-principal">Editar Meus Dados</h3>
            </div>
        </header>
        <hr>
        <form name="cadoficina" id="cadoficina" method="post" action="">
            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">OFICINA</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_nome">Nome da Oficina</label>
                        <input type="text" name="ofc_nome" id="ofc_nome" value="<?php echo $_smarty_tpl->tpl_vars['OFC_NOME']->value;?>
" required>
                    </div>
                </div>
            </section>

            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">DESCRIÇÃO</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_descricao">Descrição</label>
                        <textarea name="ofc_descricao" id="ofc_descricao" ><?php echo $_smarty_tpl->tpl_vars['OFC_DESCRICAO']->value;?>
</textarea>
                    </div>
                </div>
            </section>

            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">CONTATOS</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_email">E-mail</label>
                        <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['OFC_EMAIL']->value;?>
" name="ofc_email" id="ofc_email" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_site">Site</label>
                        <input type="url" value="<?php echo $_smarty_tpl->tpl_vars['OFC_SITE']->value;?>
" name="ofc_site" id="ofc_site" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_telefone">Telefone</label>
                        <input type="fone" value="<?php echo $_smarty_tpl->tpl_vars['OFC_TELEFONE']->value;?>
" name="ofc_telefone" id="ofc_telefone" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_celular">Celular / Whatsapp</label>
                        <input type="fone" value="<?php echo $_smarty_tpl->tpl_vars['OFC_CELULAR']->value;?>
" name="ofc_celular" id="ofc_celular" required>
                    </div>
                </div>
            </section>
            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">ENDEREÇO</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_endereco">Endereço</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['OFC_ENDERECO']->value;?>
" name="ofc_endereco" id="ofc_endereco" minlength="3" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_numero">Nº</label>
                        <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['OFC_NUMERO']->value;?>
" name="ofc_numero" id="ofc_numero" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_complemento">Complemento</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['OFC_COMPLEMENTO']->value;?>
" name="ofc_complemento" id="ofc_complemento" required>
                    </div>
                </div>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_bairro">Bairro</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['OFC_BAIRRO']->value;?>
" name="ofc_bairro" id="ofc_bairro" minlength="3" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_cidade">Cidade</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['OFC_CIDADE']->value;?>
" name="ofc_cidade" id="ofc_cidade" minlength="3" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_uf">UF</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['OFC_UF']->value;?>
 "name="ofc_uf" id="ofc_uf" maxlength="2" minlength="2" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_cep">CEP</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['OFC_CEP']->value;?>
" name="ofc_cep" id="ofc_cep" minlength="8" maxlength="8" required>
                    </div>
                </div>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="lat">Latitude</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['LAT']->value;?>
" name="lat" id="lat" readonly>
                    </div>
                    <div class="campo-admin">
                        <label for="lng">Longitude</label>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value;?>
" name="lng" id="lng" readonly>
                    </div>
                </div>
            </section>

            <section class="row" id="btngravar">
                <label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
                <input type="password" name="ofc_senha" id="ofc_senha" class="form-control" required>
                <button type="submit" class="btn btn-geral btn-block ">Gravar </button>
            </section>
        </form>
    </section>
</section>
<?php }
}
