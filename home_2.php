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
        <!-- highcharts -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    </head>
  <body>
    <h1>Aqui sera o Dashboards</h1>    
    
    <div id="grafico1"></div>




    <script>
        $(document).ready(function () {           
            $.ajax({
                type: "post",
                url: "ajax/listar_transacoes.php",
                data: "data",
                dataType: "json",
                success: function (response) {                                                                                
                    mostrarGrafico(response);                    
                }
            });


            function dadosGraficos(response) {
                return ( 
                    response.map(function(val){                                  
                        return (
                            
                                {
                                    name: val.conta,
                                    y: parseInt(val.valor), 
                                }
                            
                            
                        )                    
                    })   
                )
            }
            

            function mostrarGrafico(response){
                // Create the chart
                Highcharts.chart('grafico1', {
                    chart: {
                        type: 'column'
                    },
                    title: {
                        align: 'center',
                        text: 'Gráfico de Maiores Gastos',
                    },
                    subtitle: {
                        align: 'center',
                        text: 'Maiores despesas'
                    },
                    accessibility: {
                        announceNewData: {
                        enabled: true
                        }
                    },
                    xAxis: {
                        type: 'category'
                    },
                    yAxis: {
                        title: {
                        text: 'Percentual de Gastos'
                        }

                    },
                    legend: {
                        enabled: false
                    },
                    plotOptions: {
                        series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: 'R$ {point.y:.1f}'
                        }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                    },

                    series: [
                        {
                        name: "Browsers",
                        colorByPoint: true,
                        data: dadosGraficos(response)
                            
                            
                        }
                    ],
                    
                    });
            }


        });
        
        
    </script>
  </body>
</html>