<?php 
    include("./templates/header.php");  
    // require(".config/conexao.php");
       
    //Impedir usuário não logado de acessar essa página
    if(!isset($_SESSION["portal_usuario"])){
        header("Location: login.php");
    }

    // if usuario e senha da sessao existir
    // ok, significal que estou autenticado e posso mostrar essa pagina
    //se nao existir sessao eu redireciona para login
    // echo $_SESSION["portal_usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano de Contas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/planocontas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <h1>Aqui sera o plano de contas</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Inserir nova conta
        </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar nova conta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body-input">
                            
                            <form action="salvar_planocontas.php" method = "POST">
                                <div class="input">
                                    <label for="">Classe da conta:</label>
                                    <input type="text" placeholder="Informe a Classe" name="classe">
                                </div>
                                <div class="input">
                                    <label for="">Tipo de classe da conta:</label>
                                    <input type="text" placeholder="Informe o tipo de Classe" name="tipo_classe">
                                </div>                                                            
                                <div class="input">
                                    <label for="">Classificação da conta:</label>
                                    <input type="text" placeholder="Informe a Classificação" name="classificacao">
                                </div>
                                <div class="input">
                                    <label for="">Conta:</label>
                                    <input type="text" placeholder="Informe a Conta" name="conta">
                                </div>
                                <div >
                                    <button class="btn-cadastrar">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
    <?php include('./templates/footer.php'); ?>
</html>