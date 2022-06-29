<?php 
    include("./templates/header.php");  
    // Proteção de paginas
        
    if(!isset($_SESSION["portal_usuario"])){
        header("Location: login.php");
    }

    // if usuario e senha da sessao existir
    // ok, significal que estou autenticado e posso mostrar essa pagina
    //se nao existir sessao eu redireciona para login
    // echo $_SESSION["portal_usuario"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <h1>Aqui sera o Dashboards</h1>
        <!-- <a href = 'seu URL aqui'>
            <img src = './assets/dash.svg'/>
        </a> -->
        
    </body>
</html>