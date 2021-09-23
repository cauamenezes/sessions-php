<?php

// Recuperando a sessão criada
session_start();

echo session_id();

// echo $nome;

// Exibindo dados de uma variável de sessão
echo $_SESSION["nome"];
