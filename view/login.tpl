{if $LOGADO == true}
{else}

<section class="login-oficinas">
    <div class="container">
        <div class="login">
            <form name="formulario_login" method="post" action="" class="formulario-login">
                <h1 class="titulo-login">LOGIN</h1>
                <p>{$OFC}</p>
                <label for="email">E-mail</label>
                <input type="email" class="campo-login" name="txt_email" placeholder="E-mail" id="login" required autocomplete="off">
                <label for="senha">Senha</label>
                <input type="password" class="campo-login" name="txt_senha" placeholder="Senha" id="senha" required autocomplete="off">
                {*<a href="{$PAG_RECOVERY}" class="link__login">Esqueci a Senha</a>*}
                <button class="botao botao-normal">Entrar</button>
                {*<a href="{$PAG_CADASTRO}" class="link__login">Quero Me Cadastrar</a>*}
            </form>
        </div>
    </div>
</section>
{/if}