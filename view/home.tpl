<section class="hero">
    <div class="container">
        <div class="hero-titulos">
        <h2 class="hero-titulo">Encontre aqui as melhores<br>
            <strong>Oficinas Mecânicas</strong> <br>
            da capital PAULISTA!</h2>
        <h3 class="hero-subtitulo">Acesse pelo celular, computador ou tablet, e encontre <br>
            oficinas de confiança onde estiver e quando quiser!</h3>
        </div>
    </div>
</section>
<section class="skew"></section>
<section class="comofunciona" id="comofunciona">
    <div class="container">
        <h2 class="titulos">COMO FUNCIONA</h2>
        <div class="cards">
            <div class="card-como-funciona">
                <h2>PASSO 1</h2>
                Escolha o Serviço abaixo.
            </div>
            <img src="media/imagens/arrow-right.svg" alt="Setas" class="seta">
            <div class="card-como-funciona">
                <h2>PASSO 2</h2>
                Será apresentado um mapa com as oficinas mais próximas.
            </div>
            <img src="media/imagens/arrow-right.svg" alt="Setas" class="seta">
            <div class="card-como-funciona">
                <h2>PASSO 3</h2>
                Agende o serviço e avalie a oficina.
            </div>
        </div>
    </div>
</section>
<section class="skew skew-cor"></section>
<section class="servicos" id="servicos">
    <div class="container">
        <h2 class="titulos">SERVIÇOS</h2>
        <div class="cards-serv">
            {foreach from=$SERVICOS item=S}
                <div class="card-servicos">
                    {*<img src="{$S.serv_img}" alt="{$S.serv_nome}">*}
                    <form action="buscaroficina.php" method="get">
                        <input type="hidden" value="{$S.serv_id}" name="servico">
                        <button type="submit" class="card-titulo">
                            <h2 >{$S.serv_nome}</h2>
                        </button>
                    </form>
                </div>
            {/foreach}
        </div>
    </div>
</section>

