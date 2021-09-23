<?php

//recebe o nome do arquivo
function lerArquivo($nomeArquivo)
{

    //lê o arquivo como string
    $arquivo = file_get_contents($nomeArquivo);

    //transforma a string em array
    $jsonArray = json_decode($arquivo);

    //devolve o array
    return $jsonArray;
}

//parâmetros da função:
//1 - usuário vindo do form
//2 - senha vinda do form
//3 - dados do arquivo json de usuário e senha
function realizarLogin($usuario, $senha, $dados)
{

    foreach ($dados as $dado) {
        if ($dado->usuario == $usuario && $dado->senha == $senha) {

            // Variáveis de sessão
            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["data_hora"] = date("d/m/Y - h:i:ss");

            header("location: area_restrita.php");
            exit;
        }
    }

    header("location: index.php");
}

function verificarLogin()
{

    if ($_SESSION["id"] != session_id() || (empty($_SESSION["id"]))) {

        header("location: index.php");
    }
}

function finalizarLogin()
{
    session_unset(); //limpa todas as variáveis da sessão
    session_destroy(); //destrói a sessão ativa

    header("location: index.php");
}
