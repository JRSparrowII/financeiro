<?php 
    require_once("conexao.php");
    $debitos_conta = "SELECT conta FROM plano_contas";
    $linha_debitos = mysqli_query($conecta, $debitos_conta);
    if(!$linha_debitos){
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
    <title>Inserir</title>
</head>
<body>
    <main>
        <div id = "janela_formulario">
            <form action="inserir.php" method = "POST">
                <input type = "text" name = "id_transacao" placeholder = "Numero da transacao">
                <input type = "date" name = "data_transacao" placeholder = "Data da transacao">
                <select name="debito">
                    <?php while($linha = mysqli_fetch_assoc($linha_debitos)){ ?>
                       <option value = "1">
                        <?php echo $linha["conta"] ?>
                       </option>         
                    <?php } ?>                    
                </select>
                <input type = "text" name = "debito" placeholder = "Tipo da conta debito">
                <input type = "int" name = "valor_debito" placeholder = "valor da conta debito">
                <input type = "text" name = "credito" placeholder = "Tipo da conta credito">
                <input type = "int" name = "valor_credito" placeholder = "valor da conta credito">
                <input type = "text" name = "historico" placeholder = "historico da conta">
            </form>

        </div>
    </main>
</body>
</html>