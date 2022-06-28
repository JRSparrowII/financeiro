<?php 

    if(   isset($_POST["usuario"])    &&    isset($_POST["senha"])      ){
        $user = $_POST["usuario"];
        $password = $_POST["senha"];
        
       require_once 'config/conexao.php';

       $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND senha ='$password'  ";

       $resultado_sql = mysqli_query($conecta, $sql);

       $qtd_linhas = mysqli_num_rows($resultado_sql);

      if ($qtd_linhas > 0) {

            header('Location: home.php');
       } else {
            echo "Usuário/senha inválidos";
       }
       
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
                <form action="home.php" method = "post">
                    <h2>Tela de Login</h2>
                    <input type="text" name= "usuario" placeholder = "Usuário">
                    <input type="password" name= "senha" placeholder = "Senha">
                    <input type="submit" value = "Login">                      
                </form>
            </div>
        </main>
    </body>
</html>