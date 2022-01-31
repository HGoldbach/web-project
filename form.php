<?php
  require("formcheck.php");
  require_once("./db/db_credentials.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/form.css">
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Formulário</title>
</head>
<body>
  <header>
    <nav class="navbar">
        <a id="header"href="index.php">Página Inicial</a> 
    </nav>
  </header>
  <main>
    <section>
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
          <?php if ($erro): ?>
            <div class="alert alert-danger">
              Erros no formulário.
            </div>
          <?php endif; ?>
        <?php endif; ?>
      <h1>Ótima escolha!</h1>
      <h4>Informe seus dados para realizar sua compra</h4>
      <form id="form" method="POST" autocomplete="off" action="
      <?php if (!$erro): ?>
        checkout.php
      <?php else: ?>
        form.php
      <?php endif; ?> ">
        <div class="half-box" id="box1" <?php if(!empty($erro_name)){echo "has-error";}?>>
          <label for="name">Nome</label>
          <input required type="text" name="name" id="name" class="margem" placeholder="Digite o seu nome" value="<?php echo $firstname; ?>">
        </div>
        <div class="half-box" id="box2">
          <label for="lastname">Sobrenome</label>
          <input required type="text" name="lastname" id="lastname" placeholder="Digite o seu sobrenome">
        </div>
        <div class="half-box" id="box3">
          <label for="email">E-mail</label>
          <input required type="email" name="email" id="email" placeholder="Digite o seu e-mail">
        </div>
        <div class="half-box" id="box4">
          <label for="phone">Telefone</label>
          <input required type="tel" name="phone" id="phone" placeholder="Digite o seu telefone">
        </div>
        <div class="half-box" id="box5">
          <label for="creditcard">Cartão de Crédito</label>
          <input required type="number" name="creditcard" id="card" placeholder="Digite o número do seu cartão" min="1" max="999999999999">
        </div>
        <div class="half-box" id="box6">
          <label for="securitycode">Código de Segurança</label>
          <input type="number" name="scode" id="scode" required placeholder="Digite o Código de Segurança do Cartão" min="100" max="999">
        </div>
        <div class="full-box" id="button">
          <button type="submit" id="btn">Pagar</button>
        </div>
      </form>
    </section>
  </main>
  <footer>© Travel World</footer>
  <script src="./js/form.js"></script>
</body>
</html>
