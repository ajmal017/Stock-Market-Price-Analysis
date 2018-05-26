<?php
  include('connection.php');

  if(isset($_POST['companyName']))
  {
    $companyName = $_POST['companyName'];

    $sql = "SELECT `price` FROM `share_base_table` WHERE `name` = '$companyName'";
    $data = mysql_query($sql);
    $res = mysql_fetch_assoc($data);
    echo $res['price'];
  }
?>
