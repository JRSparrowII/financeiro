<?php     
    include("./../templates/header.php");      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balancete</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="principal-ajustada" >
        <h1 class="titulos">Balancete</h1>
        <p>Data Inicial ate a Data Final</p>
        <div class="conteudo-tabela">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Classificação</th>
                        <th>Conta</th>
                        <th>Saldo Inicial</th>
                        <th>Débito</th>
                        <th>Crédito</th>
                        <th>Saldo Final</th>
                        <th>Tipo de Conta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Ativo</td>
                        <td>10000</td>
                        <td>5000</td>
                        <td>3000</td>
                        <td>12000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1.1</td>
                        <td>Ativo Circulante</td>
                        <td>8000</td>
                        <td>2000</td>
                        <td>4000</td>
                        <td>6000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1.1.1</td>
                        <td>Caixa</td>
                        <td>5000</td>
                        <td>1000</td>
                        <td>800</td>
                        <td>5200</td>
                        <td>Disponivel</td>
                    </tr>                                 
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>