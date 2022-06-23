<?php 
include_once("templates/header.php");
?>

<div class="container">
    <!-- <?php include_once("templates/backbtn.php"); ?> -->
    <h1 id="main-title">Cadastrar Transação</h1>
    <form id="create-form" action="<?= $BASE_URL ?>registrodiario.php" method="POST">
      <input type="hidden" name="type" value="create">

      <div class="form-group">
        <label for="dataRegistro">Data da Transação:</label>
        <input type="date" class="form-control" id="dataRegistro" name="dataRegistro" placeholder="Digite a data em que foi realizada a transação" required>
      </div>

      <div class="form-group">
        <label for="debito">Débito:</label>
        <input type="text" list="planoContas" class="form-control" id="debito" name="debito" placeholder="Informe a conta" required autofocus>
        <datalist id="planoContas">
          <option value = "Banco">Banco</option>
          <option value = "Caixa">Caixa</option>
      </div>

      <div class="form-group">
        <label for="valorDebito">Valor do Débito:</label>
        <input type="text" class="form-control" id="valorDebito" name="valorDebito" placeholder="Informe o valor" required>
      </div>

      <div class="form-group">
        <label for="credito">Crédito:</label>
        <input type="text" class="form-control" id="credito" name="credito" placeholder="Informe a conta" required>
      </div>

      <div class="form-group">
        <label for="valorCredito">Valor do Crédito:</label>
        <input type="text" class="form-control" id="valorCredito" name="valorCredito" placeholder="Informe o valor" required>
      </div>

      <div class="form-group">
        <label for="historico">Historico:</label>
        <textarea type="text" class="form-control" id="historico" name="historico" placeholder="Digite o historico da movimentação" rows="6"></textarea>
      </div>
      <!-- COLOCAR O BOTAO PARA FUNCIONAR E MANDAR OS DADOS PARA O registrodiario -->
      <input type="submit" class="btn btn-primary">
    </form>
  </div>