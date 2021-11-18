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
    <div id="container">
        <div id="navbar">
            <?php if ($login): ?>
                <div id="hlog">
                    <a href="logout.php">Logout</a>
                </div>
            <?php else: ?>
                <div id="hlog">
                    <a href="login.php">Login</a> 
                </div>
                <div id="hreg">
                    <a href="register.php">Registrar</a> 
                </div>
            <?php endif; ?>
        </div>
        <div id="content">
            <h1 id="title1">Travel World</h1>
            <div id="hr">
                <hr>
                <p id="p1"> 
                    Bem-vindos a Travel World. Nós da equipe levamos você e sua família para lugares incríveis, buscando sua diversão e
                    aventura. Venha conhecer um pouco mais o nosso website. 
                </p>
                <hr>
            </div>
            <h2 id="title2">Alguns de nossos destinos paradisíacos</h2>
            <div id="table">
                <div id="ibiza">
                    <h2>Ibiza</h2> 
                    <img class="img" src="images/ibiza.jpg">
                    <p>
                        Localizada ao leste da Espanha, Ibiza é uma ilha do arquipélago
                        das Ilhas Baleares e sua maior cidade também se chama Ibiza,
                        um dos destinos mais animados da Espanha.
                    </p>
                    <a class="dm" href="ibiza.php">Descobrir mais</a>
                </div>
                <div id="maldivas">
                    <h2>Maldivas</h2>
                    <img class="img" src="images/maldivashome2.jpg">
                    <p>
                        As Ilhas Maldivas são um arquipélago de 1.196 ilhas
                        espalhadas pelo Oceano Índico, sendo 203 delas habitadas.
                        Sua localização é ao Sul da Índia, em territorio asiatico. 
                    </p>
                    <a class="dm" href="maldivas.php">Descobrir mais</a>
                </div>
                <div id="cancun">
                    <h2>Cancun</h2>
                    <img class="img" src="images/cancun2.jpg">
                    <p>
                        Cancún é um dos destinos mais famosos do México, com opções
                        de lazer e descanso para todas as idades, com inúmeras opções
                        de diversão, cultura e badalação.
                    </p>
                    <a class="dm" href="cancun.php">Descobrir mais</a>
                </div>
            </div>
            <footer> © Travel World</footer>
        </div>
    </div>
    <script src="./js/index.js"></script>
</body>
</html>
