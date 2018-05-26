<?php

include('includes/connection.php');
include 'bollingerBandAlgo.php'; 
error_reporting(0);
if(isset($_REQUEST['signout'])){
    session_destroy();
    header("location:login/index.php");
}
 $company = "HCL";
if(isset($_POST['btn'])){
  $company=$_POST['company'];
  $data5=$_POST['month'];
  $value = explode(",",$data5);
  $month = $value[0];
  $x1 = $value[1]; 

 }



if($actualValue>$middleBand)
{
     $trend2= "Less Volatile";
}
else
{

     $trend2="More Volatile";
}


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

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
              <!-- bar CHART -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                    <h3 class="box-title">COMPANY<?php echo "     -".$company; ?></h3>
                     <center><b><h3 class="box-title"><?php echo $month; ?></h3></b></center>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                  </div>
                  <br>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
            
              <div class="box box-success">
                 <form method="post" action="bollingerAlgo.php">
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

                      <a href="daily-report-all_company.php"><input type="button" value="Find By All Company" name="btn" class="btn btn-block btn-info"></a>
                     

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
                     <h3 class="box-title">Volatility</h3>
                     <h3><?php echo $trend2; ?></h3></center></a>
                    </div>
                  </div>
<?php



include 'excel_reader.php';
$excel = new PhpExcelReader;
$url='stock price database/daily reports/2014-2015-DAILY-REPORT-'.$company.'.xls';
$excel->read($url);
function getClosingPrice($sheet) {
$x = 2;
$re="";
 while($x <= $sheet['numRows']) 
 {
    $re .= "";
	$cell = $sheet['cells'][$x][5].","; 
    $re .= $cell; 
    $re .= "";
    $x++;
 }
  $re=rtrim($re,',');
  return $re ;     
}

function getDate1($sheet) {
$x = 2;//goto row number
$re="";
 while($x <= $sheet['numRows']) 
 {
    $re .= "";
	$cell = $sheet['cells'][$x][1].","; 
    $re .= $cell; 
    $re .= "";
    $x++;
 }
  $re=rtrim($re,',');
  return $re;   
}

$data=getClosingPrice($excel->sheets[0]);
$dailyClosingPrice=explode(",", $data);

$data=getDate1($excel->sheets[0]);
$dates=explode(",", $data);

$bollingerData = bollingerBand($dailyClosingPrice);
foreach ($bollingerData as $key => $value) {
	   $actualValue[] = $value['actualValue'];
       $upperBand[] = $value['upperBand'];
       $middleBand[] = $value['middleBand']; 
       $lowerBand[] = $value['lowerBand']; 
}
?>




<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script type="text/javascript">
    $(function () {
    $('#container').highcharts({
        title: {
            text: 'Trend Result Through Bollinger Band',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: <?php echo json_encode($dates);?>
        },
        yAxis: {
            title: {
                text: 'Value'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ' Rs.'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [ {
            name: 'Upper Band',
            data: <?php echo json_encode($upperBand);?>
        }, {
            name: 'Middle Band',
            data: <?php echo json_encode($middleBand);?>
        }, {
            name: 'Lower Band',
            data: <?php echo json_encode($lowerBand);?>
        },{
            name: 'Actual Value',
            data: <?php echo json_encode($actualValue,JSON_NUMERIC_CHECK);?>
        },]
    });
});
</script>
