<?php
    require "./db/authenticate.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/pagestyle.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Ibiza</title> 
</head>
<body>
    <header>
        <nav class="navbar">
               <a class="homepage" href="index.php">Página Inicial</a> 
               <?php if ($login): ?>
                   <div id="hlogt">
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
        </nav>
    </header>
    <main>
        <h1 id="titulo">Ibiza</h1>
        <section>
            <p>
                Ibiza é uma das ilhas Baleares, um arquipélago da Espanha situado no Mar Mediterrâneo. 
                Ela é conhecida pela animada vida noturna da cidade de Ibiza e de Sant Antoni, onde importantes casas noturnas europeias têm postos avançados de verão. 
                A ilha também tem vilas tranquilas, retiros de ioga e praias, que incluem desde Platja d'en Bossa, repleta de hotéis, bares e lojas, até enseadas de areia mais tranquilas, que têm ao fundo colinas cobertas de pinheiros e podem ser encontradas em todo o litoral.
            </p>
            <img class="image" src="./images/ibiza2.jpg" alt="Foto Ibiza">
            <img class="image" src="./images/ibiza3.jpg" alt="Foto Ibiza">
            <p>
                Ibiza é considerada um destino turístico popular, sobretudo por sua agitada vida noturna, concentrando-se em duas áreas, em primeiro lugar na cidade de Ibiza e em segundo plano Sant Antoni de Portmany. Em 2014, a CNN classificou a vida noturna de Ibiza como a melhor do mundo.
            </p>
            <iframe class="video" src="https://www.youtube.com/embed/hiSYuXXepBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
            <iframe class="video" src="https://www.youtube.com/embed/TJcl5iJnrqE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <section>
            <table>
                <caption>Informações de Estadia</caption>
                <thead>
                    <tr>
                        <th scope="col">Hoteís</th>
                        <th scope="col">Estrelas</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lux Isla</td>
                        <td>*****</td>
                        <td>R$1.500,00/dia</td>
                    </tr>
                    <tr>
                        <td>Sir Joan Hotel</td>
                        <td>****</td>
                        <td>R$1.000,00/dia</td>
                    </tr>
                    <tr>
                        <td>Hostal La Ciguena</td>
                        <td>***</td>
                        <td>R$750,00/dia</td>
                    </tr>
                </tbody>
            </table>
            <form action="index.php" method="post">
                <h2>Selecione o Hotel</h2>
                <?php if($login): ?>
                    <input type="radio" name="hotel" value="lux">Lux Isla<br>
                    <input type="radio" name="hotel" value="sirjoan">Sir Joan Hotel<br>
                    <input type="radio" name="hotel" value="ciguena">Hostal La Cigüeña<br>
                    <button id="btn"><a href="#">Comprar</a></button>
                <?php else: ?>
                    <p>Faça o login ou crie uma conta para ter acesso a compra!</p>
                <?php endif; ?>
            </form>
        </section>
    </main>
    <footer>© Travel World</footer>
    <script src="./js/page.js"></script>
</body>
</html> 
