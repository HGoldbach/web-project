<?php
    require "./db/authenticate.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Travel World</title>
</head>
<body>
    <img class="header-img" src="./images/background.jpg" alt="">    
    <header>
        <nav class="navbar">
            <ul class="list-items">
                <?php if ($login): ?>
                    <li class="push-right"><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="push-right"><a href="login.php">Login</a></li>
                    <li><a href="register.php">Registrar</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <h1>Travel World</h1>
    </header>
    <main>
        <div id="hr">
            <hr>
            <p id="p1"> 
                Bem-vindos a Travel World. Nós da equipe levamos você e sua família para lugares incríveis, buscando sua diversão e
                aventura. Venha conhecer um pouco mais o nosso website. 
            </p>
            <hr>
        </div>
        <h2 id="title2">Alguns de nossos destinos paradisíacos</h2>
        <section class="destinos">
            <div class="local ibiza">
                <img class="img-destinos" src="images/ibiza.jpg">
                <h3>Ibiza</h3> 
                <p>
                    Localizada ao leste da Espanha, Ibiza é uma ilha do arquipélago
                    das Ilhas Baleares e sua maior cidade também se chama Ibiza,
                    um dos destinos mais animados da Espanha.
                </p>
                <button class="dm">
                    <a href="ibiza.php">Descobrir mais</a>
                </button>
            </div>
            <div class="local maldivas">
                <img class="img-destinos" src="images/maldivashome2.jpg">
                <h3>Maldivas</h3>
                <p>
                    As Ilhas Maldivas são um arquipélago de 1.196 ilhas
                    espalhadas pelo Oceano Índico, sendo 203 delas habitadas.
                    Sua localização é ao Sul da Índia, em territorio asiatico. 
                </p>
                <button class="dm">
                    <a href="maldivas.php">Descobrir mais</a>
                </button>
            </div>
            <div class="local cancun">
                <img class="img-destinos" src="images/cancun2.jpg">
                <h3>Cancun</h3>
                <p>
                    Cancún é um dos destinos mais famosos do México, com opções
                    de lazer e descanso para todas as idades, com inúmeras opções
                    de diversão, cultura e badalação.
                </p>
                <button class="dm">
                    <a href="cancun.php">Descobrir mais</a>
                </button>
            </div>
        </section>
    </main>
    <footer>© Travel World</footer>
    <script src="./js/index.js"></script>
</body>
</html>

