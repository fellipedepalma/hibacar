<section class="hero">
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
            {foreach from=$SERVICOS item=S}
                <div class="card-servicos">
                    <img src="{$S.serv_img}" alt="{$S.serv_nome}">
                    {*<h2 class="card-titulo"> {$S.serv_nome}</h2>*}
                </div>

            {/foreach}
        </div>
    </div>
</section>

<footer class="rodape">

</footer>