<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
require("dbHandler.php");
$_SESSION['endTime'] = $_SERVER['REQUEST_TIME'];
$timeSpent = $_SESSION['endTime'] - $_SESSION['startTime'];
$timeSpent = $timeSpent . " seconds";

saveData($_SESSION['ip'],$_SESSION['startTime'],$_SESSION['user_name'],$_SESSION['endTime'],$_SESSION['pageName'],$_SESSION['user_email'],$_SESSION['user_mobile'],$_SESSION['user_type'],$_SESSION['pageViews'],$timeSpent,'end',$_SESSION['company'],$_SESSION['year']);
?>