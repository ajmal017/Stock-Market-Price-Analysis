<?php
session_start();
error_reporting(0);
if(isset($_REQUEST['signout'])){
session_destroy();
header("location:login/index.php");
}

if(!$_SESSION['user_type']){
  header("location:login/index.php");
  }

$year="2015";
$x1="2";
$x2="2";
$company="HCL";
if(isset($_POST['btn'])){
  $_SESSION['day']=$day=$_POST['day'];
  $x1 = $day;
  $x2= $day;
}
include 'excel_reader.php';
$excel = new PhpExcelReader;
$url='stock price database/daily reports/2014-2015-DAILY-REPORT-HCL.xls';
$excel->read($url);
function sheetData($sheet) {
  $x3=$GLOBALS['x1'];
  $x4=$GLOBALS['x2'];  
   $x = $x3;
    $re="";
 while($x <= $x4) {
    $re .= "";
    $y = 1;
 while($y <= $sheet['numCols']) {
      $cell = $sheet['cells'][$x][5].",";
      $re .= $cell;  
      $y++;
      break;
 }  
    $re .= "";
    $x++;
 }

  return $re .'';    
}
$data=sheetData($excel->sheets[0]); 
$value2=explode(",", $data);
array_pop($value2);
$value2=$value2;
$closing_price = $value2;
function sheetData2($sheet) {
  $x3=$GLOBALS['x1'];
  $x4=$GLOBALS['x2'];  
   $x = $x3;
    $re="";
 while($x <= $x4) {
    $re .= "";
    $y = 1;
 while($y <= $sheet['numCols']) {
      $cell = $sheet['cells'][$x][2].",";
      $re .= $cell;  
      $y++;
      break;
 }  
    $re .= "";
    $x++;
 }

  return $re .'';    
}
$data2=sheetData2($excel->sheets[0]); 
$value3=explode(",", $data2);
array_pop($value3);
$value3 = $value3;
$value2=$value2[0]-$value3[0];


function sheetData3($sheet) {
  $x3=$GLOBALS['x1']+1;
  $x4=$GLOBALS['x2']+1;  
   $x = $x3;
    $re="";
 while($x <= $x4) {
    $re .= "";
    $y = 1;
 while($y <= $sheet['numCols']) {
      $cell = $sheet['cells'][$x][2].",";
      $re .= $cell;  
      $y++;
      break;
 }  
    $re .= "";
    $x++;
 }

  return $re .'';   
}
$data5=sheetData3($excel->sheets[0]); 
$value4=explode(",", $data5);
array_pop($value4);
$value4=$value4;
$opening_next = $value4;

$opening_next[0] - $closing_price[0];

?>
</style>
<script type="text/javascript">
var data1 = '<?php
      echo  $value2;
?>';
var data30 = [data1,];
</script>


<script src="includes/jsHandler.js"></script>
<script>
window.onload = function(){ 
  return start('<?php echo basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>'); };
window.onbeforeunload = function(){
 return end();
  };
window.onclose = function(){ 
  return end();
  };
</script>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock Market Price Analysis</title>
  
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <link rel="stylesheet" href="Decorate/bootstrap/css/bootstrap.min.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
    <link rel="stylesheet" href="Decorate/dist/css/AdminLTE.min.css">
    
    <link rel="stylesheet" href="Decorate/dist/css/skins/_all-skins.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">

     <div>
              <header class="main-header">
       
              <a href="#" class="logo">
        
              <span class="logo-lg"><b>Welcome</b></span>
               </a>
      
               <nav class="navbar navbar-static-top" role="navigation">
       
            
    <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <li class="dropdown messages-menu">
             
              </li>
             
              <li class="dropdown notifications-menu">
            
                <ul class="dropdown-menu">
                
                  <li>
                   
                    <ul class="menu">
                      <li>
                     
                      </li>
                    </ul>
                  </li>
                
                </ul>
              </li>
              
              <li class="dropdown tasks-menu">
               
                <ul class="dropdown-menu">
              
                  <li>
                   
                    <ul class="menu">
                      <li>
                      </li>
                    </ul>
                  </li>
               
                </ul>
              </li>
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs"><?php echo  ucfirst(strtolower(($_SESSION['user_name']))); ?> <i class="fa fa-gears"></i></span>
                </a>
                <ul class="dropdown-menu">
                 
                  <li class="user-header">

                    <button class="img-circle" style="background-color:#00C0EF; height:80px; width:80px; font-size:24px;" >
                      <?php $name=array(ucwords(strtolower(($_SESSION['user_name']))));
                    echo  $name[0][0]; ?>
                  </button>
                    
                  </li>
               
                
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="transaction.php" class="btn btn-default btn-flat">Transactions</a>
                    </div>
                    <form method="post" action="daily-report-all_company.php">
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat" ><button type="submit" name="signout">Sign out</button></a>
                    </div>
                  </form>
                  </li>
                </ul>
              </li>
             
              <li>
            
              </li>
            </ul>
          </div>
        </nav>
      </header> 
     </div>
    
      <div>
        
        <section class="content"><center>CLOSING-OPENNING</center>
          <div class="row">
            <div class="col-md-2" style="width:200px">
         
      <div class="box box-success">
                    <div class="box-header with-border">
                    <h3 class="box-title">COMPANY<?php echo "     -".$company; ?></h3>
                     <center><b><h3 class="box-title"><?php echo $year; ?></h3><br><?php
      echo  $_SESSION['hclp']=$value2;
?></b></center>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>                                 
                    
                  
                    <div id="chartdiv"></div>  
                  </div>
                </div>

              </div>
              </div>
      <div class="col-md-2" style="width:200px">
          <iframe src="daily-report-infosys.php" width="200px" height="340px"></iframe>&nbsp;&nbsp;
      </div>
              <div class="col-md-2" style="margin-left:20px">
                <iframe src="daily-report-oracle.php" width="200px" height="340px"></iframe>
              </div>
                <div class="col-md-2">
                  <iframe src="daily-report-tcs.php" width="200px" height="340px"></iframe>
                </div>
                <div class="col-md-2">
                  <iframe src="daily-report-wipro.php" width="200px" height="340px"></iframe>
                </div>


<div class="col-md-2">
             
              <div class="box box-success">
                 <form method="post" action="daily-report-all_company.php"> 
                    <select class="form-control" style="border-radius:20px"  name="day" required>
                        <option value="">Days Before</option>
                        <?php for ($i=31; $i > 1 ; $i--) {
                        ?> 
                          <option value="<?php echo $i; ?>"><?php echo $i-1; ?></option>
                        }
                        <?php
                      }
                      ?>
                   </select>
          <div class="row" style="margin-top:20px">
                <div class="col-md-12">
                      <input type="submit" value="GO" name="btn" class="btn btn-block btn-primary">
                </div>
          </div>
              </form>
          <div class="row" style="margin-top:10px">
                    <div class="col-md-12">

                      <a href="monthly-report.php"><input type="button" value="Find By Monthly Report" name="btn" class="btn btn-block btn-info"></a>
                    </div>
                  </div>
                      <div class="row" style="margin-top:10px">
                    <div class="col-md-12">

                      <a href="yearly-report.php"><input type="button" value="Find By Yearly Report" name="btn" class="btn btn-block btn-info"></a>

                    </div>
                  </div>
                  <div class="row" style="margin-top:10px">
                    <div class="col-md-12">

                    
                        <a href="bollingerAlgo.php"><input type="button" value="Find By Bollinger Algo" name="btn" class="btn btn-block btn-success"></a>

                    </div>

                  </div>
                  <div class="row" style="margin-top:10px">
                    <div class="col-md-12">

                      <a href="predict-closing.php"><input type="button" value="Find All Prediction" name="btn" class="btn btn-block btn-primary"></a>

                    </div>

                  </div>
          <div class="row" style="margin-top:10px" >
            <div class="col-md-12" id="55">
                    <center class="btn btn-block btn-warning"> 
                     <h3 class="box-title">ALL COMPANY</h3>
                     <h3><?php echo "RESULT LIST"; ?></h3></center>
            </div>
    </div> 
    <div class="row" style="margin-top:5px" >
        <div class="col-md-12" id="55">
                    <canvas id="areaChart" style="height:0px; display:none"></canvas>    
                    <canvas id="lineChart" style="height:0px"></canvas>
                 
         </div>
          
    </div>
  </div>
  </div>  
     <div class="row" style="margin-top:40px" ><center>PREVIOUS CLOSING-NEXT OPENNING</center>
         <div class="col-md-2" style="width:200px">
      <iframe src="daily-report-hcl1.php" width="200px" height="340px"></iframe>
              </div><!-- /.col (LEFT) -->
      <div class="col-md-2" style="width:200px">
          <iframe src="daily-report-infosys1.php" width="200px" height="340px"></iframe>&nbsp;&nbsp;
      </div>
              <div class="col-md-2" style="margin-left:20px">
                <iframe src="daily-report-oracle1.php" width="200px" height="340px"></iframe>
              </div>
                <div class="col-md-2">
                  <iframe src="daily-report-tcs1.php" width="200px" height="340px"></iframe>
                </div>
                <div class="col-md-2">
                  <iframe src="daily-report-wipro1.php" width="200px" height="340px"></iframe>
                </div>
           <div class="col-md-2">
            <iframe src="all_result.php" width="400px" height="340px"></iframe>
                           </div>
              </div>
           </div>

   </div>
</div>

  
    <script src="Decorate/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  
    <script src="Decorate/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="Decorate/plugins/chartjs/Chart.min.js"></script>

    <script src="Decorate/plugins/fastclick/fastclick.min.js"></script>

    <script src="Decorate/dist/js/app.min.js"></script>
   
    <script src="Decorate/dist/js/demo.js"></script>
  
    <script>
      $(function () {
       
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
       
      var trend_name = "Trend Value";
      //var trend = trend_name.css("color","red");
      var areaChart = new Chart(areaChartCanvas);
      var myarray = ["HCL",];
        //alert(myarray.pop())
        var areaChartData = {
        labels: myarray,
          datasets: [
            {
             
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data:data30
            }
          ]
        };

        var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: false,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

       
        areaChart.Line(areaChartData, areaChartOptions);

        
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartData;
        barChartData.datasets[1].fillColor = "#00a65a";
        barChartData.datasets[1].strokeColor = "#00a65a";
        barChartData.datasets[1].pointColor = "#00a65a";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });
    </script>

  </body>
</html>


<?php
error_reporting(E_ALL);
ini_set('display_errors','On');



?>