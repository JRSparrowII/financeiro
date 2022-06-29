<?php 
    session_start();

    if (   isset($_POST["usuario"])    &&    isset($_POST["senha"])      ){
        $user = $_POST["usuario"];
        $password = $_POST["senha"];
        
       require_once 'config/conexao.php';

       $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND senha ='$password'  ";

       $resultado_acesso = mysqli_query($conecta, $sql);
       
       $dados_usuario = mysqli_fetch_assoc($resultado_acesso);

       $qtd_linhas = mysqli_num_rows($resultado_acesso);

    // se encontrou o susuario
      if ($qtd_linhas > 0) {
            $_SESSION["portal_usuario"] = $dados_usuario["id"];
            // $_SESSION["usuario_logado"] = true;
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