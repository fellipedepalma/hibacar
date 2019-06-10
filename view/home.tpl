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

<section class="comofunciona" id="comofunciona">
    <div class="container">
        <h2 class="titulos">COMO FUNCIONA</h2>
        <div class="cards">
            <div class="card-como-funciona">
                <h2>PASSO 1</h2>
                Selecione o Serviço abaixo.
            </div>
            <img src="media/imagens/arrow-right.svg" alt="Setas" class="seta">
            <div class="card-como-funciona">
                <h2>PASSO 2</h2>
                Card 2
            </div>
            <img src="media/imagens/arrow-right.svg" alt="Setas" class="seta">
            <div class="card-como-funciona">
                <h2>PASSO 3</h2>
                Card 3
            </div>
        </div>
    </div>
</section>

<section class="servicos" id="servicos">
    <div class="container">
        <h2 class="titulos">SERVIÇOS</h2>
        <div class="cards-serv">
            {foreach from=$SERVICOS item=S}
                <div class="card-servicos">
                    {*<img src="{$S.serv_img}" alt="{$S.serv_nome}">*}
                    <h2 class="card-titulo"> {$S.serv_nome}</h2>
                </div>

            {/foreach}
        </div>
    </div>
</section>

