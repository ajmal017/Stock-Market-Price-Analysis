<?php session_start();
date_default_timezone_set("Asia/Kolkata");
require("dbHandler.php");

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['startTime'] = $_SERVER['REQUEST_TIME'];
$_SESSION['pageName'] = $_GET['pageName'];

if(isset($_SESSION['pageViews']))
{
	$_SESSION['pageViews'] = $_SESSION['pageViews'] + 1;
}
else
{
	$_SESSION['pageViews'] = 0;
}

saveData($_SESSION['ip'],$_SESSION['startTime'],$_SESSION['user_name'],'0',$_SESSION['pageName'],$_SESSION['user_email'],$_SESSION['user_mobile'],$_SESSION['user_type'],$_SESSION['pageViews'],'0','start',$_SESSION['company'],$_SESSION['year']);
?>