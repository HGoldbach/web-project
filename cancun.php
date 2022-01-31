<?php
    require "./db/authenticate.php";
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/pagestyle.css">
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Cancún</title>
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
    <h1 id="titulo">Cancún</h1>
    <section>
      <p>
        Cancún é uma cidade que fica na costa do estado de Quintana Roo, no México, em uma
        península que se tornou um dos centros turísticos mais importantes do México,
        tendo conseguido preservar suas belezas naturais e sua cultura ancestral,
        representada principalmente em cidades maias, como Tulum, Uxmal ou Chichén
        Itzá, fundadas no período pré-colombiano.
        O local foi especialmente projetado para ser um dos maiores pontos
        turísticos do México. Em razão disso, foram
        feitos grandes investimentos em infraestrutura e os hotéis
        da cidade são especialmente preparados para receber
        turistas de todo o mundo.
      </p>
      <img class="image" src="./images/cancun-ca.jpg" width="100%" alt="Foto cancun">
      <img class="image" src="./images/cancun2.jpg" width="80%" alt="Foto Maldivas"> <br>
      <p>
        Em Cancun existem cerca de 22 quilômetros de praias de areia fina, divididos entre
        a lagoa e o mar. As ruínas, as
        praias, a vegetação, os parques cheios de espetáculos de entretenimento,
        o clima, a fauna marinha e a estrutura
        hoteleira fazem de Cancun um dos destinos turísticos mais visitados do México.
      </p>
      <iframe class="video" src="https://www.youtube.com/embed/8LRxc_7Idlk" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
      encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <iframe class="video" src="https://www.youtube.com/embed/W-zf6fgo4A8" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>
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
              <td>Grand Riviera Princess</td>
              <td>*****</td>
              <td>R$1.500,00/dia</td>
          </tr>
          <tr>
              <td>Ocean Riviera Paradise El Beso</td>
              <td>****</td>
              <td>R$1.000,00/dia</td>
          </tr>
          <tr>
              <td>Ibis Styles Mexico Zona Rosa</td>
              <td>***</td>
              <td>R$750,00/dia</td>
          </tr>
        </tbody>
      </table>
      <form action="index.php" method="post">
        <h2>Selecione o Hotel</h2>
        <?php if($login): ?>
          <input type="radio" name="hotel" value="RivieraPrin" required>Grand Riviera Princess<br>
          <input type="radio" name="hotel" value="Ocean">Ocean Riviera Paradise El Beso<br>
          <input type="radio" name="hotel" value="ibis">ibis Styles Mexico Zona Rosa<br>
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
