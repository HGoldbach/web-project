<?php
    require "./db/db_functions.php";

    $error = false;
    $success = false;
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
      
          $conn = connect_db();
      
          $name = mysqli_real_escape_string($conn,$_POST["name"]);
          $email = mysqli_real_escape_string($conn,$_POST["email"]);
          $password = mysqli_real_escape_string($conn,$_POST["password"]);
          $confirm_password = mysqli_real_escape_string($conn,$_POST["confirm"]);
      
          if ($password == $confirm_password) {
            $password = md5($password);
      
            $sql = "INSERT INTO $table_users
                    (name, email, password) VALUES
                    ('$name', '$email', '$password');";
      
            if(mysqli_query($conn, $sql)){
              $success = true;
            }
            else {
              $error_msg = mysqli_error($conn);
              $error = true;
            }
          }
          else {
            $error_msg = "Senha não confere com a confirmação.";
            $error = true;
          }
        }
        else {
          $error_msg = "Por favor, preencha todos os dados.";
          $error = true;
        }
      }
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <title>Criar Conta</title>
</head>
<body>
    <div id="container">
        <div id="navbar">
           <a id="header"href="index.php">Página Inicial</a> 
        </div>
        <div id="content">
          <?php if ($success): ?>
              <h1 id=tws>Travel World</h1>
              <h3 id="suc1">Usuário criado com sucesso!</h3>
              <h3 id="suc2"> Seguir para <a href="login.php">login</a></h3>
              </body>
              </html>
              <?php exit(); ?>
          <?php endif; ?>
          <?php if ($error): ?>
              <h3 id="error"><?php echo $error_msg; ?></h3>
          <?php endif; ?>
            <div id="tw">
                <h1>Travel World</h1>
            </div>


             <div id="register-form">
                <form action="register.php" method="post">
                    <p id="join">Criar uma Conta</p>
                    <div class="form-group">
                          <input type="text" name="name" id="name" value="<?php echo $name; ?>" placeholder="Nome Completo" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email" required>
                    </div>
                     <div class="form-group">
                        <input type="password" name="password" id="password" value ="" placeholder="Senha" required>
                    </div>
                    <div class="form-group">
                          <input type="password" name="confirm" id="confirm" value="" placeholder="Confirmar Senha" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="btn">Criar a Conta!</button>
                    </div>
                </form>
                <p id="acess">Já possuí uma conta? <a href="login.php">ACESSE AQUI!</a></p>
            </div>
        </div>
    </div>
    <footer> © Travel World</footer>
</body>
</html>
