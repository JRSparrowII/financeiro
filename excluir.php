<?php 
    require_once("./config/conexao.php");
    include("./templates/header.php");

    if(isset($_POST['id'])){
        $tid = $_POST['id'];

        $exclusao = "DELETE FROM transacoes WHERE id_transacao = {$tid}";
        $consulta_exclusao = mysqli_query($conecta, $exclusao);
        if(!$consulta_exclusao){
            die( "Erro ao excluir");
        } else{
            header('location: index.php');
        }
    
    }

    // CONSULTA AO BANCO DE DADOS
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $tr = "SELECT * FROM transacoes WHERE id_transacao = {$id}";
        $consulta_tr = mysqli_query($conecta, $tr);

        if(!$consulta_tr){
            die("Erro no Banco de Dados");
        }

    } else{
        header('location: index.php');
    }
    $info_trans = mysqli_fetch_assoc($consulta_tr);
    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/cadastro.css">
        <!-- LINK BOOTSTRAP REMOTO -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
        <title>Excluir</title>
    </head>
    <body></body>
</html>

<div class="container">

  <h1 id="main-title">Exclusão de Registro
  <button type="button" class="btn btn-outline-dark">Voltar</button>
  </h1>
    
  <form action = "excluir.php" method="POST">
    <input type="hidden" name="id" value="cadastrar">

    <div class="form-group">
      <label for="data_transacao">Data da Transação:</label>
      <input type="date" class="form-control" name="data_transacao" value= "<?php echo $resultado['data_transacao']?>" placeholder="Digite a data em que foi realizada a transação" required>
    </div>
    
    <div class="form-group">
      <label for="debito">Débito:</label>
      <select name="debito" class="form-control" name="debito" value= "<?php echo $resultado['debito']?>" placeholder = "Tipo da conta debito" required autofocus>
        <?php while($linha = mysqli_fetch_assoc($linha_debitos)){ ?>
          <option value = "1">
          <?php echo $linha["conta"] ?>
          </option>         
        <?php } ?>                    
      </select>        
    </div>

    <div class="form-group">
      <label for="valor_debito">Valor do Débito:</label>
      <input type="float" class="form-control" name="valor_debito" value= "<?php echo $resultado['valor_debito']?>" placeholder="Informe o valor" required>
    </div>

    <div class="form-group">
      <label for="credito">Crédito:</label>
      <select name="credito" class="form-control" value= "<?php echo $resultado['credito']?>" placeholder = "Tipo da conta credito" required autofocus>
        <?php while($linha = mysqli_fetch_assoc($linha_creditos)){ ?>
          <option value = "1">
          <?php echo $linha["conta"] ?>
          </option>         
        <?php } ?>                    
      </select>         
    </div>

    <div class="form-group">
      <label for="valor_credito">Valor do Crédito:</label>
      <input type="float" class="form-control" name="valor_credito" value= "<?php echo $resultado['valor_credito']?>" placeholder="Informe o valor" required>
    </div>

    <div class="form-group">
      <label for="historico">Histórico:</label>
      <textarea type="text" class="form-control" name="historico" value= "<?php echo $resultado['historico']?>" placeholder="Digite o historico da movimentação" rows="6"></textarea>
    </div>
    
    <input type="hidden" name="id" value="<?php echo $id_transacao?>" > 
    <input type= "submit" value = "Excluir Registro" class="btn btn-primary btn-block" id="atualizar">
  </form>

  <?php include('./templates/footer.php'); ?>
</div>