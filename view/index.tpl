<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/site.css">
    <title>Hibacar</title>
</head>
<body>
<header class="cabecalho">
    <nav class="menu-superior container">
        <ul class="menu-superior-lista">
            <li class="menu-superior-item">
                <a href="{$GET_HOME}">Home</a>
            </li>
            <li class="menu-superior-item">
                <a href="#">2</a>
            </li>
            <li class="menu-superior-item">
                <img src="media/imagens/logo_hibacar.png" alt="">
            </li>
            <li class="menu-superior-item">
                <a href="#">3</a>
            </li>
            <li class="menu-superior-item">
                <a href="#">4</a>
            </li>
        </ul>
        
    </nav>
</header>

{php}
    Rotas::get_Pagina();
{/php}
<footer class="rodape">

</footer>
</body>
</html>