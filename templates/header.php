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
  <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> 
  <!-- BOTÃO DROPDOWN -->
  <script>
    $(function () {
      $('.dropdown-toggle').dropdown();
    }); 
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
      <?php 
        }
      ?>
    </div>
  </header>
  <nav class="navbar navbar-default navbar-expand-lg navbar-dark bg-dark ">
    <!-- FIXAR O CABEÇALHO: navbar fixed-top -->
    <div class = "container">
      <div class="navbar-nav">        
        <li><a class="nav-link active" href="home.php">Home</a></li>
        <li><a class="nav-link active" href="index.php">Registros</a></li>
        <li><a class="nav-link active" href="cadastro.php">Cadastrar Transação</a></li>              
        <li><a class="nav-link active" href="planocontas.php">Plano de Contas</a></li>
        <button type="button"
          data-bs-toggle="dropdown"
          class="btn btn-dark dropdown-toggle"          
          >Relatórios          
        </button>
      </div>
      <div class="dropdown">
        

        <div class = "dropdown-menu" aria-labelledby="menu">
          <li><a href="relatorios/balanco.php" class="dropdown-item">Balanço Patrimonial</a></li>
          <li><a href="relatorios/balancete.php" class="dropdown-item">Balancete Mensal</a></li>
        </div>
      </div>
      <div id = "header_saudacao">
        <h5> Seja Bem-Vindo, <?php echo $nome?> | <a href="logout.php"> Sair </a></h5>        
      </div>
    </div>
  </nav>
  
