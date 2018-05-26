<?php
include('includes/connection.php');
error_reporting(0);
if(isset($_REQUEST['signout'])){
session_destroy();
header("location:login/index.php");
}


if(!$_SESSION['user_type'])
{
  header("location:login/index.php");
  }
$x1="0";
$x2="97";
$company="HCL";
$month="January";
if(isset($_POST['btn'])){
  $company=$_POST['company'];
  $data5=$_POST['month'];
  $value = explode(",",$data5);
  $month = $value[0];
 $x1 = $value[1];



 }

include 'excel_reader.php';
$excel = new PhpExcelReader;
$excel2 = new PhpExcelReader;
$url='stock price database/monthly reports/2008-2015-MONTHLY-REPORT-'.$company.'.xls';
$url2='stock price database/yearly reports/2008-2015-YEARLY-REPORT-'.$company.'.xls';
$excel->read($url);
$excel2->read($url2);
function sheetData($sheet) {

   $x = 2;
   $re="";
 while($x <= 9) {
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


function sheetData2($sheet) {

   $x = 2;
    $re="";
 while($x <= 9) {
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




for($i=$x1;$i<=97;$i++){
$value2[]=$value3[$i];
$i=$i+11;
}

$value3=$value2;
$anData = $value3;
if($anData[0]=null){
  array_pop($anData);
}


$trend_value=forecasttrend($anData);

function sheetData8($sheet) {
    $x = "83";
    $re="";
 while($x <= "97") {
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



$data5=sheetData8($excel->sheets[0]);
$value22=explode(",", $data5);
array_pop($value22);
$_SESSION['twelve_avg'] = array_sum($value22);
function sheetData1($sheet) {
  $x3="83";
  $x4="97";
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
$data=sheetData1($excel->sheets[0]);
$closing_price=explode(",", $data);
array_pop($closing_price);
$_SESSION['six_avg'] = array_sum($closing_price);
$count = count($closing_price);

for($i=0;$i<$count-1;$i++)
{
  $v += $closing_price[$i] - $value22[$i];

}


$data0=sheetData2($excel2->sheets[0]);
$value4=explode(",", $data0);

$data=sheetData($excel2->sheets[0]);
$value2=explode(",", $data);




$_SESSION['last']=$total = $v/($count-1)+$closing_price[14];
$_SESSION['last_closing']=$closing_price[14];
if($closing_price[14]>$total)
{
  $trend2 ="Sell";
}
else
{
  $trend2 = "Buy";
}

?>

<script type="text/javascript">
var data1 = '<?php
      echo  $value2[0];
?>';
var data2 = '<?php
      echo  $value2[1];
?>';

var data3 = '<?php
      echo  $value2[2];
?>';

var data4 = '<?php
      echo  $value2[3];
?>';

var data5 = '<?php
      echo  $value2[4];
?>';

var data6 = '<?php
      echo  $value2[5];
?>';
var data7 = '<?php
      echo  $value2[6];
?>';

var data8 = '<?php
      echo  $value2[7];
?>';

var data30 = [data1,data2,data3,data4,data5,data6, data7,data8];
    
  
    
    
    
    
var data14 = '<?php
      echo  $value4[0];
?>';
var data15 = '<?php
      echo  $value4[1];
?>';

var data16 = '<?php
      echo  $value4[2];
?>';

var data17 = '<?php
      echo  $value4[3];
?>';

var data18 = '<?php
      echo  $value4[4];
?>';

var data19 = '<?php
      echo  $value4[5];
?>';
var data20 = '<?php
      echo  $value4[6];
?>';

var data21 = '<?php
      echo  $value4[7];
?>';





var data31 = [data14,data15,data16,data17,data18,data19, data20,data21];  

</script>

<script src="includes/jsHandler.js"></script>
<script>
window.onload = function(){ return start('<?php echo basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>'); };
window.onbeforeunload = function(){ return end(); };
window.onclose = function(){ return end(); };
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
                    <form method="post" action="monthly-report.php">
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
      
      <div>
       
        <section class="content">
          <div class="row">
            <div class="col-md-9">
            
                  <div class="box box-success">
                    <div class="box-header with-border">
                    <h3 class="box-title">COMPANY<?php echo "     -".$company; ?></h3>
                     
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                     <iframe src="trendnew2.php" width="970px" height="340px"></iframe>
                  </div>
                  <br>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              
              <div class="box box-success">
                 <form method="post" action="yearly-report.php">
                    <select class="form-control" style="border-radius:20px"  name="company" required>
                        <option value="">SELECT COMPANY</option>
                        <option value="HCL">HCL</option>
                        <option value="INFOSYS" style="background-color:#D2D6DE">INFOSYS</option>
                        <option value="ORACLE">ORACLE</option>
                        <option value="TCS" style="background-color:#D2D6DE">TCS</option>
                        <option value="WIPRO">WIPRO</option>
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

                      <a href="daily-report-all_company.php"><input type="button" value="Find By All Company" name="btn" class="btn btn-block btn-info"></a>
                      <br>
                        <a href="bollingerAlgo.php"><input type="button" value="Find By Bollinger Algo" name="btn" class="btn btn-block btn-success"></a>

                    </div>

                  </div>
                  <div class="row" style="margin-top:10px">
                    <div class="col-md-12">

                      <a href="predict-closing.php"><input type="button" value="Find All Prediction" name="btn" class="btn btn-block btn-primary"></a>

                    </div>

                  </div>
                  <div class="row" style="margin-top:40px" >
                    <div class="col-md-12" id="55">

                     <a href="#" data-toggle="modal" data-target="#myModal"><center class="btn btn-block btn-warning">
                     <h3 class="box-title">Recommendation</h3>
                     <h3><?php echo $trend2; ?></h3></center></a>
                    </div>
                  </div>

                  <div class="row" style="margin-top:40px" >
                    <div class="col-md-12" id="55">
<div class="box">
                <div class="box-header">
                  <center><h3 class="box-title">All Result List</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tbody><tr>
                      <th>Algo</th>
                      <th>Progress</th>
                      <th style="width: 40px">Result</th>
                    </tr>
                    <tr>
                       <td>Closing-Openning</td>
                      <td>
                        <div class="progress progress-xs">
<div class="progress-bar progress-bar-yellow" style="width: <?php echo  $_SESSION['last_closing']/100; ?>%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red"><?php echo $_SESSION['last_closing']; ?></span></td>
                    </tr>
                 

                  </tbody></table>
                </div>
              </div>
                    </div>
                  </div>

              </div>
                    <canvas id="areaChart" style="height:250px; display:none"></canvas>
                    <canvas id="lineChart" style="height:250px"></canvas>


            


            </div>
          </div>
     
          <form method="post" action="includes/ShareDataSubmit.php">
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
<?php
$usersname = $_SESSION['user_name'];
                    $query = "SELECT sum(quantity) as quantity FROM `share_base_table` WHERE `name` = '$company' and user_name = '$usersname'";
                    $val = mysql_query($query);
                    $result2 = mysql_fetch_assoc($val);
                    print_r($result2);
                    ?>
         
              <div class="modal-content">
                <div class="modal-header" align="center">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><?php echo $company;  ?> Your stock (<?php echo $result2['quantity'];?>) </h4>
                </div>
                <div class="modal-body">
                  <?php
                    $query = "SELECT * FROM `share_base_table` WHERE `name` = '$company'";
                    $val = mysql_query($query);
                    $result = mysql_fetch_assoc($val);

                    $quantity = $result['quantity'];
                    $price = $result['price'];
                    $id = $result['id'];
                  ?>

                  <div class="row">
                    <div class="col-sm-4">
                      <label class="control-label">Average Price</label>
                    </div>

                    <div class="col-sm-8">
                      <input type="hidden" name="companyName" value="<?php echo $company; ?>">
                      <input type="text" class="form-control" name="averagePrice" readonly value="<?php echo $price; ?>">
                    </div>
                  </div>

                  <br>

                    <div class="row">
                      <div class="col-sm-4">
                        <label class="control-label">Stock</label>
                      </div>

                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="stock" readonly value="<?php echo $quantity; ?>">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-sm-4">
                        <label class="control-label">Current Price</label>
                      </div>

                      <div class="col-sm-8">
                        <input type="hidden" name="shareId" value="<?php echo $id; ?>">
                        <?php
                        $sql = "SELECT * FROM `current_price` WHERE `name` = '$company'";
                        $value = mysql_query($sql);
                        $container = mysql_fetch_assoc($value);
                        ?>
                        <input type="text" class="form-control" name="currentPrice" readonly value="<?php echo $container['price']; ?>">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-sm-4">
                        <label class="control-label">Buy/Sell Price</label>
                      </div>

                      <div class="col-sm-8">

                        <input type="text" class="form-control" name="buySellPrice" value="" required="required">
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-sm-4">
                        <label class="control-label">Transaction</label>
                      </div>

                      <div class="col-sm-4">
                        <input type="radio" name="transaction" value="Buy" <?php if(isset($trend2) && $trend2=="Buy"){ echo "checked"; } ?>>&nbsp;&nbsp;Buy

                      </div>

                      <div class="col-sm-4">
                        <input type="radio" name="transaction" value="Sell" <?php if(isset($trend2) && $trend2=="Sell"){ echo "checked"; } ?>>&nbsp;&nbsp;Sell
                      </div>
                    </div>

                    <br>

                    <div class="row">

                      <div class="col-sm-4">
                        <label class="control-label">Quantity of Share</label>
                      </div>

                      <div class="col-sm-8">
                        <input type="text" name="shareQuantity" class="form-control" required="required">
                        <input type="hidden" name="profit_loss">
                      </div>
                    </div>

                    <br>




                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
              </form>
            </div>
          </div>
          

        </section>
      </div>

    </div>
    <script src="Decorate/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script>
      $(function(){
        $("#submit").click(function(){

          var price = $("[name=price]").val();
          var shareQuantity = $("[name=shareQuantity]").val();
          var stock = $("[name=stock]").val();
          var staticSharePrice = $("[name=staticSharePrice]").val();
          var transaction = $("[name=transaction]").val();
          var buySellPrice = parseInt($("[name=buySellPrice]").val());
          var shareQuantity = parseInt($("[name=shareQuantity]").val());
          var currentPrice = parseInt($("[name=currentPrice]").val());

          var count = $("[name=transaction]").length;
          for(var i=0; i<count; i++)
          {
            if($("[name=transaction]").eq(i).is(":checked"))
            {

              if($("[name=transaction]").eq(i).val()=="Sell")
              {
                if(parseInt(stock) < parseInt(shareQuantity))
                {
                  alert("Please enter quantity less than stock quantity.");
                  $("[name=shareQuantity]").focus();
                  return false;
                }

                if(buySellPrice!="" && shareQuantity!="")
                {
                  var actualPrice = currentPrice*shareQuantity;
                  var sellingPrice = buySellPrice*shareQuantity;
                  if(sellingPrice < actualPrice)
                  {
                  
                    var diff = sellingPrice - actualPrice;
                    $("[name=profit_loss]").val(diff);
                    if(confirm("You are on loss by "+ diff + ". Do you want to continue."))
                    {
                      return true;
                    }
                    else
                    {
                      return false;
                    }
                  }
                  else if(actualPrice < sellingPrice)
                  {
                    var diff = sellingPrice - actualPrice;
                    $("[name=profit_loss]").val(diff);
                    if(confirm("You are on profit by "+ diff + ". Do you want to continue."))
                    {
                      return true;
                    }
                    else
                    {
                      return false;
                    }
                  }
                }

              }
            }
          }

        });
      });
    </script>

   
    <script src="Decorate/bootstrap/js/bootstrap.min.js"></script>
   
    <script src="Decorate/plugins/chartjs/Chart.min.js"></script>
  
    <script src="Decorate/plugins/fastclick/fastclick.min.js"></script>
   
    <script src="Decorate/dist/js/app.min.js"></script>

    <script src="Decorate/dist/js/demo.js"></script>
    
    <script>
      $(function () {
       
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    
       var areaChart = new Chart(areaChartCanvas);

        var areaChartData = {
          labels: ["2008", "2009", "2010", "2011", "2012", "2013", "2014","2015"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: data31
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

<script>
    </script>
  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

function forecasttrend($anData, $nForecast = 1, $nSeasonLength = 1, $nAlpha =     0.2, $nBeta = 0.01, $nGamma = 0.01, $nDevGamma = 0.1) {
// Calculate an initial trend level
$nTrend1 = 0;
    for($i = 0; $i < $nSeasonLength; $i++) {
      $nTrend1 += $anData[$i];
    }
    $nTrend1 /= $nSeasonLength;

$nTrend2 = 0;
    for($i = $nSeasonLength; $i < 2*$nSeasonLength; $i++) {
  $nTrend2 += $anData[$i];
    }
    $nTrend2 /= $nSeasonLength;

$nInitialTrend = ($nTrend2 - $nTrend1) / $nSeasonLength;

// Take the first value as the initial level
$nInitialLevel = $anData[0];

// Build index
$anIndex = array();
    foreach($anData as $nKey => $nVal) {
  $anIndex[$nKey] = $nVal / ($nInitialLevel + ($nKey + 1) * $nInitialTrend);
}

// Build season buffer
$anSeason = array_fill(0, count($anData), 0);
for($i = 0; $i < $nSeasonLength; $i++) {
  $anSeason[$i] = ($anIndex[$i] + $anIndex[$i+$nSeasonLength]) / 2;
}

// Normalise season
$nSeasonFactor = $nSeasonLength / array_sum($anSeason);
    foreach($anSeason as $nKey => $nVal) {
  $anSeason[$nKey] *= $nSeasonFactor;
}

$anHoltWinters = array();
    $anDeviations = array();
$nAlphaLevel = $nInitialLevel;
$nBetaTrend = $nInitialTrend;
foreach($anData as $nKey => $nVal) {
      $nTempLevel = $nAlphaLevel;
      $nTempTrend = $nBetaTrend;

  $nAlphaLevel = $nAlpha * $nVal / $anSeason[$nKey] + (1.0 - $nAlpha) * ($nTempLevel + $nTempTrend);
  $nBetaTrend = $nBeta * ($nAlphaLevel - $nTempLevel) + ( 1.0 - $nBeta ) * $nTempTrend;

  $anSeason[$nKey + $nSeasonLength] = $nGamma * $nVal / $nAlphaLevel + (1.0 - $nGamma) * $anSeason[$nKey];

  $anHoltWinters[$nKey] = ($nAlphaLevel + $nBetaTrend * ($nKey + 1)) * $anSeason[$nKey];
      $anDeviations[$nKey] = $nDevGamma * abs($nVal - $anHoltWinters[$nKey]) + (1-$nDevGamma)
              * (isset($anDeviations[$nKey - $nSeasonLength]) ? $anDeviations[$nKey - $nSeasonLength] : 0);
}

$anForecast = array();
    $nLast = end($anData);
    for($i = 1; $i <= $nForecast; $i++) {
       $nComputed = round($nAlphaLevel + $nBetaTrend * $anSeason[$nKey + $i]);
       if ($nComputed < 0) { // wildly off due to outliers
         $nComputed = $nLast;
       }
       $anForecast[] = $nComputed;
}

return $anForecast;
}
?>

