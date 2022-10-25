<?php
	require_once("dbtools.inc.php");
	$card=$_POST["SN"];
	$card2=$_POST["SN2"];
	$name=$_POST["Name"];
	$chi=$_POST["SC1"];
	$math=$_POST["SC2"];
	$nat=$_POST["SC3"];
	
	$link=create_connection();
	
	$sql="UPDATE `students`.`grade` SET `no` = '$card2', `name` = '$name', `chinese` = '$chi', `math` = '$math', `nature` = '$nat' WHERE (`no` = '$card');";
	
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
