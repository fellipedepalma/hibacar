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
                    {$S.serv_nome}
                </div>
            {/foreach}
            {*<div class="card-servicos">*}
                {*Escolha 2*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 3*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 4*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 5*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 6*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 7*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 8*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 9*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 10*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 11*}
            {*</div>*}
            {*<div class="card-servicos">*}
                {*Escolha 12*}
            {*</div>*}
        </div>
    </div>
</section>

<footer class="rodape">

</footer>