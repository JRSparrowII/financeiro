<?php 
    include("./templates/header.php"); 
    include("./config/conexao.php"); 
    
    // Proteção de paginas        
    if(!isset($_SESSION["portal_usuario"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['debito', 'valor_debito'],

                <?php 
                    include("./config/conexao.php");
                    $sql = "SELECT * FROM transacoes";
                    $consulta = mysqli_query($conecta, $sql);
                    
                    while($dados = mysqli_fetch_array($consulta)){
                        $debito = $dados['debito'];
                        $valor_debito = $dados['valor_debito'];                    
                ?>           
                        
                ['<?php echo $debito?>', '<?php echo $valor_debito?>'];
            
            <?php } ?>

            ]);

            var options = {
            chart: {
                title: 'Despesas do mês',
                subtitle: 'durante o ano de 2021',
            }
            };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
        </script>
    </head>
  <body>
    <h1>Aqui sera o Dashboards</h1>    
    <!-- <div class="conteudo-cabecalho">
        <div class="cabecalho-centro">
            <img src="./assets/financeiro.jpg" alt="">           
        </div>   
    </div> -->
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>