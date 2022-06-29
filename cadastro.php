<?php  
  include("./templates/header.php"); 

  if(!isset($_SESSION["portal_usuario"])){
    header("Location: login.php");
  }
   
  require_once("./config/conexao.php");
  $debitos_conta = "SELECT conta FROM plano_contas";
  $linha_debitos = mysqli_query($conecta, $debitos_conta);
  if(!$linha_debitos){
    die("Erro no banco");
  }  
  
  $creditos_conta = "SELECT conta FROM plano_contas";
  $linha_creditos = mysqli_query($conecta, $creditos_conta);
  if(!$linha_creditos){
    die("Erro no banco");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/cadastro.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
        <title>Cadastrar</title>
    </head>
    <body></body>
</html>

<div class="container">

  <h1 id="main-title">Cadastrar Transação</h1>
  <form action = "index.php" method="POST">
    <input type="hidden" name="type" value="cadastrar">

    <div class="form-group">
      <label for="data_transacao">Data da Transação:</label>
      <input type="date" class="form-control" name="data_transacao" placeholder="Digite a data em que foi realizada a transação" required>
    </div>
    
    <div class="form-group">
      <label for="debito">Débito:</label>
      <select name="debito" class="form-control" placeholder = "Tipo da conta debito" required autofocus>
        <?php while($linha = mysqli_fetch_assoc($linha_debitos)){ ?>
          <option value = "1">
          <?php echo $linha["conta"] ?>
          </option>         
        <?php } ?>                    
      </select>        
    </div>

    <div class="form-group">
      <label for="valor_debito">Valor do Débito:</label>
      <input type="float" class="form-control" name="valor_debito" placeholder="Informe o valor" required>
    </div>

    <div class="form-group">
      <label for="credito">Crédito:</label>
      <select name="credito" class="form-control" placeholder = "Tipo da conta credito" required autofocus>
        <?php while($linha = mysqli_fetch_assoc($linha_creditos)){ ?>
          <option value = "1">
          <?php echo $linha["conta"] ?>
          </option>         
        <?php } ?>                    
      </select>         
    </div>

    <div class="form-group">
      <label for="valor_credito">Valor do Crédito:</label>
      <input type="float" class="form-control" name="valor_credito" placeholder="Informe o valor" required>
    </div>

    <div class="form-group">
      <label for="historico">Histórico:</label>
      <textarea type="text" class="form-control" name="historico" placeholder="Digite o historico da movimentação" rows="6"></textarea>
    </div>
    <!-- COLOCAR O BOTAO PARA FUNCIONAR E MANDAR OS DADOS PARA O registrodiario -->
    <input type="submit" class="btn btn-primary">
  </form>

  <?php include('./templates/footer.php'); ?>
</div>