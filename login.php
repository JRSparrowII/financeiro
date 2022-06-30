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
            echo "<script>alert('Usuário/senha inválidos')</script>";
            
       }
       
    }
    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        
        <!-- estilo -->
        <!-- <link href="_css/estilo.css" rel="stylesheet"> -->
        <link href = "./css/login.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/login.css">
    </head>

    <body>       
        <main>  
            <div id= "janela_login">
                <form action="login.php" method = "post">
                    <h2>Sistema de Contabilidade Pessoal</h2>
                    <input type="text" name= "usuario" placeholder = "Usuário">
                    <input type="password" name= "senha" placeholder = "Senha">
                    <input type="submit" value = "Login">                                        
                </form>
                <div id= "social-container">
                    <a href="#" id = "forgot-pass">Esqueceu a senha?</a>
                    <!-- <p>Ou entre pela suas redes sociais</p>
                    <i class = "fa fa-facebook-f"></i> -->
                </div>
                <div id = "register-container">
                    <p>Ainda não tem uma conta?</p>
                    <a href="#">Cadastre-se</a>

                </div>
            </div>
        </main>
    </body>
</html>