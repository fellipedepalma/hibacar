<section class="container">
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
                        <input type="text" name="ofc_nome" id="ofc_nome" value="{$OFC_NOME}" required>
                    </div>
                </div>
            </section>

            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">DESCRIÇÃO</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_descricao">Descrição</label>
                        <textarea name="ofc_descricao" id="ofc_descricao" >{$OFC_DESCRICAO}</textarea>
                    </div>
                </div>
            </section>

            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">CONTATOS</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_email">E-mail</label>
                        <input type="email" value="{$OFC_EMAIL}" name="ofc_email" id="ofc_email" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_site">Site</label>
                        <input type="url" value="{$OFC_SITE}" name="ofc_site" id="ofc_site" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_telefone">Telefone</label>
                        <input type="fone" value="{$OFC_TELEFONE}" name="ofc_telefone" id="ofc_telefone" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_celular">Celular / Whatsapp</label>
                        <input type="fone" value="{$OFC_CELULAR}" name="ofc_celular" id="ofc_celular" required>
                    </div>
                </div>
            </section>
            <section class="bloco-form">
                <h2 class="sub-titulo-form" id="titulo_pf">ENDEREÇO</h2>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_endereco">Endereço</label>
                        <input type="text" value="{$OFC_ENDERECO}" name="ofc_endereco" id="ofc_endereco" minlength="3" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_numero">Nº</label>
                        <input type="number" value="{$OFC_NUMERO}" name="ofc_numero" id="ofc_numero" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_complemento">Complemento</label>
                        <input type="text" value="{$OFC_COMPLEMENTO}" name="ofc_complemento" id="ofc_complemento" required>
                    </div>
                </div>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="ofc_bairro">Bairro</label>
                        <input type="text" value="{$OFC_BAIRRO}" name="ofc_bairro" id="ofc_bairro" minlength="3" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_cidade">Cidade</label>
                        <input type="text" value="{$OFC_CIDADE}" name="ofc_cidade" id="ofc_cidade" minlength="3" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_uf">UF</label>
                        <input type="text" value="{$OFC_UF} "name="ofc_uf" id="ofc_uf" maxlength="2" minlength="2" required>
                    </div>
                    <div class="campo-admin">
                        <label for="ofc_cep">CEP</label>
                        <input type="text" value="{$OFC_CEP}" name="ofc_cep" id="ofc_cep" minlength="8" maxlength="8" required>
                    </div>
                </div>
                <div class="campos-admin">
                    <div class="campo-admin">
                        <label for="lat">Latitude</label>
                        <input type="text" value="{$LAT}" name="lat" id="lat" readonly>
                    </div>
                    <div class="campo-admin">
                        <label for="lng">Longitude</label>
                        <input type="text" value="{$LNG}" name="lng" id="lng" readonly>
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
