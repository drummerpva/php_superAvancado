<?php
$vendas = array(10,20,30,40,20);
$custos = array(8,15,37,98,35);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Gráficos</title>

    </head>
    <body>

        <div style="width: 500px;">
            <canvas id="grafico">

            </canvas>
            <canvas id="grafico2">

            </canvas>
        </div>



        <script type="text/javascript" src="chart.js"></script>
        <script type="text/javascript">
            window.onload = function () {
                var contexto = document.getElementById("grafico").getContext("2d");
                var grafico = new Chart(contexto, {
                    type: "line",
                    data: {
                        labels: ["janeiro", "fevereiro","março", "abril", "maio"],
                        datasets:[{
                             label:"Vendas",
                             backgroundColor: "#F00",
                             borderColor: "#F00",
                             data:[
                                 <?php echo implode(",",$vendas);?>
                             ],
                             fill:false
                        },{
                            label: "Custos",
                            backgroundColor: "#00FF00",
                            borderColor: "#0F0",
                            data:[
                                <?php echo implode(",",$custos);?>
                            ],
                            fill:false
                        }]
                    }
                });
                var contexto2 = document.getElementById("grafico2").getContext("2d");
                var grafico2 = new Chart(contexto, {
                    type: "horizontalBar",
                    data: {
                        labels: ["janeiro", "fevereiro","março", "abril", "maio"],
                        datasets:[{
                             label:"Vendas",
                             backgroundColor: "#F00",
                             borderColor: "#F00",
                             data:[
                                 <?php echo implode(",",$vendas);?>
                             ],
                             fill:false
                        },{
                            label: "Custos",
                            backgroundColor: "#00FF00",
                            borderColor: "#0F0",
                            data:[
                                <?php echo implode(",",$custos);?>
                            ],
                            fill:false
                        }]
                    }
                });
            }

        </script>
    </body>
</html>