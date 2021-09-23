<?php

session_start();
require_once("./funcoes.php");

// recebendo os dados json - 1° forma:
// $dados = lerArquivo("dados/usuarios.json");
//teste
// var_dump($dados); exit;

// realizarLogin("cristiano", "123456", $dados);

// recebendo os dados json - 2° forma:
// realizarLogin("cristiano", "123456", lerArquivo("dados/usuarios.json"));

// // verificando os dados de variáveis de sessão:
// echo "NOME USUÁRIO: " . $_SESSION["usuario"] . "<br />";
// echo "ID SESSÃO: " . $_SESSION["id"] . "<br />";

verificarLogin();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>ÁREA RESTRITA</title>
</head>

<body>

    <h1>ÁREA RESTRITA</h1>

    <div class='toolbar'>

        <h2>

            <?php echo 'Olá ' . strtoupper($_SESSION['usuario']) . ' - Login efetutado em: ' . $_SESSION['data_hora']; ?>

        </h2>

        <h2>

            <a class="material-icons" href="processa_login.php?logout=true">logout</a>

        </h2>

    </div>

</body>

</html>