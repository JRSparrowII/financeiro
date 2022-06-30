<?php 

    if(!empty($_GET['id'])){

        include_once("./config/conexao.php");
        
        $id_edit = $_GET['id'];
        $sqlSelect = "SELECT * FROM transacoes WHERE id_transacao = $id_edit";
        $resultado = $conecta->query($sqlSelect);
        
        if($resultado->num_rows > 0){
            $sqlDelete = "DELETE * FROM transacoes WHERE id_transacao = $id_edit";
            $resultadoDeletar = $conecta->query($sqlDelete);
        }           
        } else{
        header('location: index.php');
        }       
    }
?>