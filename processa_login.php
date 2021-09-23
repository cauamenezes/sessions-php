<?php

session_start();

require("./funcoes.php");

realizarLogin($_POST["txt_usuario"], $_POST["txt_senha"], lerArquivo("./dados/usuarios.json"));
