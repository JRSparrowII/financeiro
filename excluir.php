<?php 
    require_once("./config/conexao.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $tr = "SELECT * FROM transacoes WHERE id_transportadora = {$id}";
        $consulta_tr = mysqli($conecta, $tr);

        if(!$consulta_tr){
            die("Erro no Banco de Dados");
        }

    } else{
        header('location: index.php');
    }
    $info_trans = mysqli_fetch_assoc($consulta_tr);    

?>
