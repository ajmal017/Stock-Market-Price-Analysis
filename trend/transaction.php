<?php session_start(); ?>
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
                      <a href="monthly-report.php" class="btn btn-default btn-flat">Dashboard</a>
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
       
        <div class="row">
          <div class="col-sm-12" align="center">
            <h4>Transactions</h4>
          </div>
        </div>

        <div class="container">

        <table class="table table-bordered">
          <tr>
            <th>User</th>
            <th>company</th>
            <th>Purchase/Buy Price</th>
            <th>Transaction</th>
            <th>Share Quantity</th>
            <th>Stock Price</th>
            <th>Profit/Loss</th>
            <th>Date And Time</th>
          </tr>


            <?php
            include('includes/connection.php');

            $userName = $_SESSION['user_name'];
            $sql = "SELECT * FROM `share_transactions` WHERE `user_name`='$userName'";
            $data = mysql_query($sql);
            while($result = mysql_fetch_assoc($data)){
            ?>
          <tr>
            <td><?php echo $result['user_name']; ?></td>
            <td><?php echo $result['company']; ?></td>
            <td><?php echo $result['purchase_buy_price']; ?></td>
            <td><?php echo $result['transaction']; ?></td>
            <td><?php echo $result['share_quantity']; ?></td>
            <td><?php echo $result['stock_price']; ?></td>
            <td><?php echo $result['profit_loss']; ?></td>
            <td><?php echo $result['date_time']; ?></td>

          </tr>
          <?php } ?>
        </table>
        </div>

      </div>

    </div>
    <script src="Decorate/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    

    
    <script src="Decorate/bootstrap/js/bootstrap.min.js"></script>
   
    <script src="Decorate/plugins/chartjs/Chart.min.js"></script>
    
    <script src="Decorate/plugins/fastclick/fastclick.min.js"></script>
    
    <script src="Decorate/dist/js/app.min.js"></script>
   
    <script src="Decorate/dist/js/demo.js"></script>
    
    