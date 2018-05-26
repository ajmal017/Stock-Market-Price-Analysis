<?php

session_start();
  include('connection.php');

  if(isset($_POST['companyName']) && isset($_POST['averagePrice']) && isset($_POST['stock']) && isset($_POST['transaction']) && isset($_POST['currentPrice']) && isset($_POST['buySellPrice']) && isset($_POST['shareId']) && isset($_POST['shareQuantity']))
  {
    $comnpanyName = $_POST['companyName'];
    $averagePrice = $_POST['averagePrice'];
    $stock = $_POST['stock'];
    $transaction = $_POST['transaction'];
    $currentPrice = $_POST['currentPrice'];
    $buySellPrice = $_POST['buySellPrice'];
    $profit_loss = $_POST['profit_loss'];

    $shareQuantity = $_POST['shareQuantity'];
    $userName = ucwords(strtolower($_SESSION['user_name']));
    $shareId = $_POST['shareId'];
    $dateTime = date("Y-m-d")." ".date("H:i:s");

    if($transaction=="Sell")
    {
      $totalQuantity = $stock - $shareQuantity;
    }
    else
    {
      $totalQuantity = $stock + $shareQuantity;
    }

    $stockPrice = $averagePrice*$stock - $totalQuantity*$shareQuantity/$totalQuantity;
$usersname = $_SESSION['user_name'];
    $sql = "INSERT INTO `share_transactions`(`user_name`, `company`, `purchase_buy_price`, `transaction`, `share_quantity`,`stock_price`,`profit_loss`,`date_time`) VALUES ('$userName','$comnpanyName','$buySellPrice','$transaction','$shareQuantity','$stockPrice','$profit_loss','$dateTime')";
    if(mysql_query($sql))
    {
      $query = "UPDATE `share_base_table` SET `quantity`='$totalQuantity' WHERE `id`='$shareId' and user_name ='$usersname'";
      if(mysql_query($query))
      {
        header("Location:".$_SERVER['HTTP_REFERER']);
      }
    }
    else
    {
      print_r(mysql_error());
    }
  }

?>
