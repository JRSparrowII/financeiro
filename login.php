<?php 
    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela de Login</title>
        
        <!-- estilo -->
        <!-- <link href="_css/estilo.css" rel="stylesheet"> -->
        <link href = "./css/login.css" rel="stylesheet">
        
    </head>

    <body>       
        <main>  
            <div id= "janela_login">
                <form action="login.php" method = "post">
                    <h2>Tela de Login</h2>
                    <input type="text" name= "usuario" placeholder = "Usuário">
                    <input type="password" name= "senha" placeholder = "Senha">
                    <input type="submit" value = "Login">
                </form>
            </div>
        </main>
    </body>
</html>