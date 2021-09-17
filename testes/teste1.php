<?php 

//Criando uma sessão
session_start();

// Verificando o ID da sessão
echo session_id();

//Criando variáveis de sessão
$_SESSION["nome"] = "Cauã Menezes da Silva";

$nome = "Cauã Menezes da Silva";
echo $nome;

?>