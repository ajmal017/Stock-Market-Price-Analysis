<?php
session_start();
if($_SESSION['hclp']>$_SESSION['hcln']){
  $hclresult="Sell Within Day";
}
else{
  $hclresult="Sell By Next Day";
}
if($_SESSION['infosysp']>$_SESSION['infosysn']){
  $infosysresult="Sell Within Day";
}
else{
  $infosysresult="Sell By Next Day";
}
if($_SESSION['oraclep']>$_SESSION['oraclen']){
  $oracleresult="Sell Within Day";
}
else{
  $oracleresult="Sell By Next Day";
}
if($_SESSION['tcsp']>$_SESSION['tcsn']){
  $tcsresult="Sell Within Day";
}
else{
  $tcsresult="Sell By Next Day";
}
if($_SESSION['wiprop']>$_SESSION['wipron']){
  $wiproresult="Sell Within Day";
}
else{
  $wiproresult="Sell By Next Day";
}
?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stock Market Price Analysis</title>
   
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <link rel="stylesheet" href="Decorate/bootstrap/css/bootstrap.min.css">
    
 
    <link rel="stylesheet" href="Decorate/dist/css/AdminLTE.min.css">
    
    

   
  </head>
  <body>
                  

               
<div class="box">
                <div class="box-header">
                <h3 class="box-title">All Result List</h3>
                </div>
                <div class="box-body no-padding">
                  <table class="table table-condensed" style="width:20px">
                    <tbody><tr>
                      <th>Company</th>
                      <th style="width: 40px">Result</th>
                    </tr>
                    <tr>
                       <td>HCL</td>
                       <td><span class="badge bg-yellow"><?php echo $hclresult; ?></span></td>
                    </tr>
                    <tr>
                      <td>INFOSYS</td>
                     
                      <td><span class="badge bg-yellow"><?php echo  $infosysresult; ?></span></td>
                    </tr>
                     <tr>
                      <td>ORACLE</td>
                     
                      <td><span class="badge bg-yellow"><?php echo  $oracleresult; ?></span></td>
                    </tr>
                     <tr>
                      <td>TCS</td>
                      
                      <td><span class="badge bg-yellow"><?php echo  $tcsresult; ?></span></td>
                    </tr>
                     <tr>
                      <td>WIPRO</td>
                      
                      <td><span class="badge bg-yellow"><?php echo  $wiproresult; ?></span></td>
                    </tr>
                    
                  </tbody></table>
                </div>
              </div>
                   
     