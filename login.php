<?php
    require "./db/db_functions.php";
    require "./db/authenticate.php";

    $error = false;
    $password = $email = "";

    if (!$login && $_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {

        $conn = connect_db();

        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $password = md5($password);

        $sql = "SELECT id,name,email,password FROM $table_users
                WHERE email = '$email';";

        $result = mysqli_query($conn, $sql);
        if($result){
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            if ($user["password"] == $password) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];
            $_SESSION["user_email"] = $user["email"];

            header("Location: " . dirname($_SERVER['SCRIPT_NAME']) . "/index.php");
            exit();
            }
            else {
            $error_msg = "Usuário ou senha incorreta!";
            $error = true;
            }
        }
        else{
            $error_msg = "Usuário ou senha incorreta!";
            $error = true;
        }
        }
        else {
        $error_msg = mysqli_error($conn);
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
    <link rel="stylesheet" href="./css/login.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <title>Travel World - Login</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="list-items">
                <li><a href="index.php">Página Inicial</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img src="./images/login.svg" alt="Imagem de login de uma mulher com montanhas e avião no fundo">
        <?php if ($login): ?>
            <h3 id="logy">Você já está logado!</h3>
            <p id="plog">Volte para página inicial!</p>
            <a class="header" href="index.php">Página Inicial</a> 
            </main>
            </body>
            </html>
            <?php exit(); ?>
        <?php endif; ?>
        <section class="register-form">
            <?php if ($error): ?>
                <h3 id="error"><?php echo $error_msg; ?></h3>
            <?php endif; ?>
            <h1>Travel World</h1>
            <form action="login.php" method="post">
                <h2>Entrar na Conta</h2>
                <div class="form-group">
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email">
                </div>
                 <div class="form-group">
                    <input type="password" name="password" id="password" value="" placeholder="Senha">
                <div class="form-group">
                    <button type="submit" id="btnr">Entrar!</button>
                </div>
            </form>
            <p id="acess">Não possuí uma conta? <a href="register.php">CLIQUE AQUI!</a></p>
        </section>
    </main>
    <footer>© Travel World</footer>
</body>
</html>
