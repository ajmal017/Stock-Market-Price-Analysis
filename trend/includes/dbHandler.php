<?php
function saveData($ip,$startTime,$user_name,$endTime,$pageName,$email_id,$mobile_no,$role,$viewCount,$timeSpent,$action,$company,$year)
{
	
	$db_username = 'root';
	$db_password = '';
	$db_name = 'trend';
	$db_host = 'localhost';
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

	if($action == 'start')
	{
		$q = "INSERT INTO track_user(ip_address,start_time,user_name,end_time,page_name,emailid_user,mobile_no,role,view_count,time_spent,company,year) VALUES('$ip','$startTime','$user_name','$endTime','$pageName','$email_id','$mobile_no','$role','$viewCount','$timeSpent','$company','$year')";
	
	    $mysqli->query($q);

	    $list = array("$ip,$startTime,$user_name,$endTime,$pageName,$email_id,$mobile_no,$role,$viewCount,$timeSpent,$action",);
        $file = fopen("../trackdata.csv","a");
        foreach ($list as $line)
         {
         fputcsv($file,explode(',',$line));
         }
        fclose($file);



	
	}
	else
	{
		$q = "UPDATE track_user SET end_time = '$endTime', time_spent = '$timeSpent' WHERE ip_address = '$ip' AND start_time = '$startTime' AND page_name = '$pageName'";
	
	$mysqli->query($q);
	}
	
	
}
?>
