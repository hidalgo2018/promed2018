<?php
/**
 * Created by PhpStorm.
 * User: 1711 IRON
 * Date: 13/12/2017
 * Time: 07:29
 */
?>
<html>
<head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Atendimentos');
            data.addColumn('number', 'Quantidade');
            data.addRows([
                ['Homens > 60anos', 50],
                ['Mulheres > 60anos', 35],
                ['Homens entre 18 e 60', 51],
                ['Mulheres entre 18 e 60', 66],
                ['Homens < 18', 55],
                ['Mulheres < 18', 85]
            ]);

            // Set chart options
            var options = {'title':'Atendimentos por Faixa Etária',
                'width':600,
                'height':400};

            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
<!--Div that will hold the pie chart-->
<div id="chart_div"></div>
</body>
</html>
