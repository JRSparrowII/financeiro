<?php 

// INSERÇÃO DAS INFORMAÇÕES NO BANCO DE DADOS
// if (isset($_POST['submit'])) {   
    include("./config/conexao.php"); 
   
    $classe        = $_POST['classe'];
    $tipo_classe   = $_POST['tipo_classe'];
    $classificacao = $_POST['classificacao'];
    $conta         = $_POST['conta'];

    $sql = "INSERT INTO plano_contas (classe, tipo_classe, classificacao, conta)
    VALUES ( '$classe', '$tipo_classe', '$classificacao', '$conta')"; 
    
    $resultado = mysqli_query($conecta, $sql);  

    if ($resultado) {
        echo "Salvo com sucesso!";
        header("refresh: 3; index.php");
    } else {
        echo "Houve um erro ao tentar salvar!";
    }

//   }


?>