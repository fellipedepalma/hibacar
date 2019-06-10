<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/site.css">
    <link rel="stylesheet" href="{$GET_TEMA}/tema/css/home.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <title>Hibacar | Home</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="menu-superior container">
            <ul class="menu-superior-lista">
                <li class="menu-superior-item">
                    <a href="{$GET_HOME}" class="menu-superior-link">Home</a>
                </li>
                <li class="menu-superior-item">
                    <a href="#comofunciona" class="menu-superior-link">Como Funciona</a>
                </li>
                <li class="menu-superior-item logo-absolute">
                    <a href="#" class="menu-superior-link">
                        <img src="media/imagens/logo_hibacar.png" alt="Logo Hibacar" >
                    </a>
                </li>
                <li class="menu-superior-item sumir">
                </li>
                <li class="menu-superior-item">
                    <a href="#servicos" class="menu-superior-link">Serviços</a>
                </li>
                <li class="menu-superior-item">
                    <a href="#" class="menu-superior-link">Login</a>
                </li>
            </ul>
        </nav>
    </header>

    {php}
        Rotas::get_Pagina();
    {/php}

    <footer class="rodape">
        <div class="container">
            <div class="conteudo-rodape">
                <section class="mapadosite">
                    <h2>Mapa do Site</h2>
                    <nav>
                        <ul>
                            <li>Home</li>
                            <li>Quem Somos</li>
                            <li>Como Funciona</li>
                            <li>Serviços</li>
                            <li>Login</li>
                        </ul>
                    </nav>
                </section>
                <section class="contatos">
                    <h2>Contatos</h2>
                    <p>+55 11 9 9999-8888</p>
                    <p>contato@hibacar.com.br</p>
                    <p>Av. Eng. Eusébio Stevaux, 823<br>
                       Santo Amaro, São Paulo - SP, 04696-000</p>
                </section>
                <section class="faleconosco">
                    <h2>Fale Conosco</h2>
                    <form action="" method="post" class="form-faleconosco">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem"></textarea>
                    </form>
                </section>
            </div>
        </div>
    </footer>
    <script src="{$GET_TEMA}/tema/js/scroll.js"></script>
</body>
</html>