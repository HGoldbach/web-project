<?php
    function verifica_campo($texto){
    $texto = trim($texto);
    $texto = stripslashes($texto);
    $texto = htmlspecialchars($texto);
    return $texto;
    }

    $firstname = $lastname = $email = $phone = $card = $code = "";

    $erro = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["name"])){
        $erro_name = "Nome é obrigatório.";
        $erro = true;
    }
    else{
        $firstname = verifica_campo($_POST["name"]);
    }

    if(empty($_POST["lastname"])){
        $erro_lastname = "Sobrenome é obrigatório.";
        $erro = true;
    }
    else{
        $lastname = verifica_campo($_POST["lastname"]);
    }
    
    if(empty($_POST["email"])){
        $erro_email = "Email é obrigatório.";
        $erro = true;
    }
    else{
        $email = verifica_campo($_POST["email"]);
    }
    
    if(empty($_POST["phone"])){
        $erro_phone = "Telefone é obrigatório.";
        $erro = true;
    }
    else{
        $phone = verifica_campo($_POST["phone"]);
    }
    
    if(empty($_POST["creditcard"])){
        $erro_card = "Número do cartão é obrigatório.";
        $erro = true;
    }
    else{
        $card = verifica_campo($_POST["creditcard"]);
    }
        
    if(empty($_POST["scode"])){
        $erro_code = "Código de segurança é obrigatório.";
        $erro = true;
    }
    else{
        $code = verifica_campo($_POST["scode"]);
    }
    }

?>
