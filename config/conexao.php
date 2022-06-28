<?php
    // Passo 1: Definir as variaveis
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $banco    = "financas";
    $conecta  = mysqli_connect ($servidor, $usuario, $senha,  $banco);

    // Passo 2: Testar a conexao
    if(mysqli_connect_errno()){
        die("Falha na conexão: " . mysqli_connect_errno());
    }
  
?>
