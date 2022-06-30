<?php 
    require_once("./config/conexao.php");

    if(isset($_POST['atualizar'])){
        
        $id_transacao = $_POST['id_transacao'];
        $data_transacao = $_POST['data_transacao'];
        $debito = $_POST['debito'];
        $valor_debito = $_POST['valor_debito'];
        $credito = $_POST['credito'];
        $valor_credito = $_POST['valor_credito'];
        $historico = $_POST['historico'];

        $sqlUpdate = "UPDATE transacoes SET 
        data_transacao='$data_transacao', 
        debito='$debito', 
        valor_debito='$valor_debito
        credito='$credito',
        valor_credito= '$valor_credito',
        historico= '$historico'
        WHERE id_transacao= $id_transacao";

        $resultado = $conecta->query($sqlUpdate);        
    }
    header('location: index.php');
?>
