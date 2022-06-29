<?php
  // include_once('../config/url.php');
  require_once 'config/conexao.php';
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Transações</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
   <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <header>
    <div id = "header central">
      <?php         
        if(isset($_SESSION["portal_usuario"])){
          $user_logado = $_SESSION["portal_usuario"];
          $saudacao = "SELECT usuario FROM usuarios WHERE id = {$user_logado} ";          
          // $saudacao = "SELECT usuario";
          // $saudacao = .= " FROM usuarios";
          $saudacao_login = mysqli_query($conecta, $saudacao);
          if(!$saudacao_login){
            die("Falha no Banco de Dados");
          }
          $saudacao_login = mysqli_fetch_assoc($saudacao_login);
          $nome = $saudacao_login["usuario"];
      ?>
        <div id = "header_saudacao">
          <h5>Seja Bem-Vindo, <?php echo $nome?> | <a href="logout.php"> Sair </a></h5>
        </div>
      <?php 
        }
      ?>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div>
        <div class="navbar-nav">
          <a class="nav-link active" href="home.php">Home</a>
          <a class="nav-link active" href="index.php">Registros Diários</a>
          <a class="nav-link active" href="cadastro.php">Cadastrar Transação</a>          
          <a class="nav-link active" href="relatorios/balanco.php">Balanco</a>
          <a class="nav-link active" href="relatorios/balancete.php">Balancete</a>          
          <a class="nav-link active" href="planocontas.php">Plano de Contas</a>
        </div>
      </div>
    </nav>
  </header>
