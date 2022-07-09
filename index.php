<?php     
    include("./templates/header.php");   
    include_once("./config/conexao.php"); 

    $consulta = "SELECT 
        id_transacao,
        data_transacao,
        p1.conta as conta_debito,
        valor_debito,
        p2.conta as conta_credito,
        valor_credito,
        historico
        FROM  transacoes t
        INNER JOIN plano_contas p1 on p1.id_classe = t.debito
        INNER JOIN plano_contas p2 on p2.id_classe = t.credito 
        ORDER BY id_transacao desc";

     
    $resultado = $conecta->query($consulta);
    // print_r($resultado);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Diario</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="conteudo-cabecalho">
        <div class="cabecalho-centro">
            <img src="./assets/logo.svg" alt="">
            
            <form action="cadastro.php" method="post">
                <button class="btn">
                    Nova Transação                
                </button>
            </form>
        </div>   
    </div>
    <div class="principal" >
        <div class="secundaria" >
            <div class="item-card">
                <div>
                    <p>Débitos</p>
                    <img src="./assets/income.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
            <div class="item-card">
                <div>
                    <p>Créditos</p>
                    <img src="./assets/outcome.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
            <div class="item-card colortotal">
                <div>
                    <p>Saldo</p>
                    <img src="./assets/total.svg" alt="">
                </div>
                <strong>R$ 1000,00</strong>
            </div>
        </div>
        <div class="conteudo-tabela">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Data da Movimentação</th>
                        <th>Débito</th>
                        <th>Valor do Débito</th>
                        <th>Crédito</th>
                        <th>Valor do Crédito</th>
                        <th>Histórico de Transações</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($user_data = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td>" .$user_data['id_transacao']."</td>";
                            echo "<td>" .$user_data['data_transacao']."</td>";
                            echo "<td>" .$user_data['conta_debito']."</td>";
                            echo "<td>" .$user_data['valor_debito']."</td>";
                            echo "<td>" .$user_data['conta_credito']."</td>";
                            echo "<td>" .$user_data['valor_credito']."</td>";
                            echo "<td>" .$user_data['historico']."</td>";
                            echo "<td>
                                <a class = 'btn btn-sm btn-primary' href='edit.php?id=$user_data[id_transacao]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                    <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                    <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                    </svg>
                                </a>
                                <a class = 'btn btn-sm btn-danger' href='excluir.php? id= $user_data[id_transacao]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                    </svg>
                                </a>
                            </td>"; 
                            echo "</tr>";                           
                        }
                    ?>                    
                </tbody>
              </table>
        </div>
    </div>   
</body>
</html>


