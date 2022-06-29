<?php 
  include("./templates/header.php"); 
  require_once 'config/conexao.php';  
?>

<?php 
  // $trans = "SELECT * FROM financas ";

  // if(isset($_GET[]))
?>

<!-- $alterar = "SELECT * FROM transacoes"; -->

<!-- <!DOCTYPE html>
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
</html> -->

<!-- <div class="container">
    
    <h1 id="main-title">Cadastrar Transação</h1>
    <form action = "index.html" method="POST">
      <input type="hidden" name="type" value="cadastrar">

      <div class="form-group">
        <label for="data_transacao">Data da Transação:</label>
        <input type="date" class="form-control" id="data_transacao" name="data_transacao" placeholder="Digite a data em que foi realizada a transação" required>
      </div>

      <div class="form-group">
        <label for="debito">Débito:</label>
        <input type="text" list="planoContas" class="form-control" id="debito" name="debito" placeholder="Informe a conta" required autofocus>
      </div>

      <div class="form-group">
        <label for="valor_debito">Valor do Débito:</label>
        <input type="text" class="form-control" id="valor_debito" name="valor_debito" placeholder="Informe o valor" required>
      </div>

      <div class="form-group">
        <label for="credito">Crédito:</label>
        <input type="text" class="form-control" id="credito" name="credito" placeholder="Informe a conta" required>
      </div>

      <div class="form-group">
        <label for="valor_credito">Valor do Crédito:</label>
        <input type="text" class="form-control" id="valor_credito" name="valor_credito" placeholder="Informe o valor" required>
      </div>

      <div class="form-group">
        <label for="historico">Histórico:</label>
        <textarea type="text" class="form-control" id="historico" name="historico" placeholder="Digite o historico da movimentação" rows="6"></textarea>
      </div>
      <!-- COLOCAR O BOTAO PARA FUNCIONAR E MANDAR OS DADOS PARA O registrodiario -->
      <!-- <input type="submit" class="btn btn-primary">
    </form>
    <!-- <?php include_once('./templates/footer.php'); ?> -->
  <!-- </div> -->
