<?php 
@session_start();

$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db("trend", $con);

if (!$db_selected)
  {
  die ("Can\'t use db : " . mysql_error());
  }

date_default_timezone_set("Asia/Kolkata");


?>