<?php
  require("formcheck.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/checkout.css">
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
  <title>Pagamento</title>
</head>
<body>
  <main>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <?php if (!$erro): ?>
        <section>
          <h1>Travel World</h1>
          <h3>Compra Realizada Com Sucesso.</h1>
          <p id="firstp">Obrigado <strong><?php echo $firstname . " " . $lastname?>!</strong></p>
          <p id="secondp">Os dados da compra foram enviados para o email cadastrado <strong><?php echo $email ?></strong></p>
          <p id="thirdp">Nós da Travel World agradecemos sua compra e desejamos uma ótima viagem!</p>
        </section>
      <?php endif; ?>
    <?php endif; ?>
    <a href="index.php" id="btn">Voltar a pagina principal</a>
    <footer> © Travel World</footer>
  </main>
</body>
</html>

