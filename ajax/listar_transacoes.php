<?php 
    include '../config/conexao.php';

    $sql = "select * from transacoes_teste"; 
    
    $resultado = mysqli_query($conecta, $sql); 

    foreach($resultado as $valor_atual_linha) {
        $registros[] = $valor_atual_linha;
        
    }

    

   echo json_encode($registros);

?>