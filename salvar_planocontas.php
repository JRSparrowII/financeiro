<?php 

echo '<pre>';
print_r($_POST);
echo '</pre>';
exit;


EXIT;

// INSERÇÃO DAS INFORMAÇÕES NO BANCO DE DADOS
// if (isset($_POST['submit'])) {   
    include("./config/conexao.php"); 
   
    $data_transacao      = $_POST['data_transacao'];
    $debito              = $_POST['debito'];
    $valor_debito        = $_POST['valor_debito'];
    $credito             = $_POST['credito'];
    $valor_credito       = $_POST['valor_credito'];
    $historico           = $_POST['historico'];

    $sql = "INSERT INTO transacoes(data_transacao, debito, valor_debito, credito, valor_credito, historico)
    VALUES ( '$data_transacao', '$debito', '$valor_debito', '$credito', '$valor_credito','$historico')"; 
    
    $resultado = mysqli_query($conecta, $sql);  

    if ($resultado) {
        echo "Salvo com sucesso!";
        header("refresh: 3; index.php");
    } else {
        echo "Houve um erro ao tentar salvar!";
    }

//   }


?>