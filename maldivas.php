<?php
    require "./db/authenticate.php"
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/pagestyle.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Maldivas</title>
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
      <h1 id="titulo">Maldivas</h1>
      <section>
        <p>
          A República das Maldivas é um pequeno país insular situado no Oceano Índico ao 
          sudoeste do Sri Lanka e da Índia, ao sul do continente asiático, constituído por 
          1 196 ilhas, das quais 203 são habitadas, localizadas a cerca de 450 km ao sul 
          da península do Decão. A sua única fronteira real é com o território indiano das
          Laquedivas, a norte, mas são também os vizinhos mais próximos do Território
          Britânico do Oceano Índico, um conjunto de ilhas localizadas ao sul das Maldivas.
        </p>
        <img class="image" src="./images/maldivas.jpg" alt="Foto Maldivas" >
        <img class="image" src="./images/maldivas2.jpg" alt="Foto Maldivas">
        <p>
          As Maldivas estão na lista de lugares em que todos sonham visitar pelo menos uma vez na vida. As praias perfeitas e os bangalôs luxuosos sobre o mar formam um cenário inesquecível e romântico! Não é à toa que o arquipélago é o destino dos sonhos de celebridades e casais em lua de mel.
          Embora as Maldivas sejam conhecidas por ser um destino de luxo, não é necessário ganhar na loteria para conhecer esse paraíso!
        </p>
        <iframe class="video" src="https://www.youtube.com/embed/JJliRVFDiHM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="video" src="https://www.youtube.com/embed/H6J5wdZUxck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                <td>Anantara Dhigu</td>
                <td>*****</td>
                <td>R$1.500,00/dia</td>
            </tr>
            <tr>
                <td>Arena Beach</td>
                <td>****</td>
                <td>R$1.000,00/dia</td>
            </tr>
            <tr>
                <td>Paradise Island</td>
                <td>***</td>
                <td>R$750,00/dia</td>
            </tr>
          </tbody>
        </table>
        <form action="index.php" method="post">
          <h2>Selecione o Hotel</h2>
          <?php if($login): ?>
            <input type="radio" name="hotel" value="anantara"> Anantara Dhigu <br>
            <input type="radio" name="hotel" value="arena"> Arena Beach <br>
            <input type="radio" name="hotel" value="paradise"> Paradise Island <br>
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
