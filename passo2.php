<?php 


if(   isset($_POST["usuario"])    &&    isset($_POST["senha"])      ){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

} ELSE {
    RE
}

$usuario = $_POST['usuario'];

$senha =  $_POST['senha'];

echo "usuario e $usuario";
echo "<br>";
echo "senha e $senha";

// receber o dados. ex: usuário: carlos_henrique senha: 123

//conectart ao banco de dados

//executar uma query (sql) ex: select * from usuarios where usuario = :usuario and senha = :senha

// verificar usando if, se retornou dados, se retornou, é porque existe no banco,

// rediciono para tela home.php

//caso n encontrou o usuario e senha, retorno para tela de login informando dados usuário/senha inválidos

?>