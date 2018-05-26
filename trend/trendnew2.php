<?php
session_start();
$jstrend= $_SESSION['trend'];
$twelve_avg=$_SESSION['twelve_avg'];
$six_avg=$_SESSION['six_avg'];
$last=$_SESSION['last'];
$last_closing=$_SESSION['last_closing'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Stock Market Price Analysis</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
        ${demo.css}
        </style>
        <script type="text/javascript">
var data1 = '<?php echo $twelve_avg/15; ?>';
var data11=parseInt(data1);
var data2 = '<?php echo $six_avg/15; ?>';
var data22=parseInt(data2);
var data3 = '<?php echo $last; ?>';
var data33=parseInt(data3);
var data4 = '<?php echo $last_closing; ?>';
var data44=parseInt(data4);
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Trend'
        },
        subtitle: {
            text: 'of the company'
        },
        xAxis: {
            categories: ['Last 15 Opening Price Avg', 'Last 15 Closing Price Avg', 'Total Closing-Opening','Last Closing Price'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Last 15 Opening Price Avg',
            data: [data11, '', '','']
        }, {
            name: 'Last 15 Closing Price Avg',
            data: ['', data22, '', '']
        }, {
            name: 'Total Closing-Opening',
            data: ['', '', data33, '']
        }, {
            name: 'Last Closing Price',
            data: ['', '', '', data44]
        }]
    });
});
        </script>
    </head>
    <body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

    </body>
</html>
