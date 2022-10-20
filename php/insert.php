<?php
	require_once("dbtools.inc.php");
	$card=$_POST["SN"];
	$name=$_POST["Name"];
	$math=$_POST["SC1"];
	$chi=$_POST["SC2"];
	$nat=$_POST["SC3"];
	
	$link=create_connection();
	
	$sql="INSERT INTO grade(no, name, chinese, math, nature) VALUES('$card','$name','$math','$chi','$nat')";
	
	$result=execute_sql("students", $sql, $link);
	$result = mysql_affected_rows();
	mysql_close($link);
	if($result == 1){
		echo '{"success": true}';
	}
	else if($result == 0){
		echo '{"success": null}';
	}
	else if($result == -1){
		echo '{"success": false}';
	}
		

	
?>
