<?php
	require_once("dbtools.inc.php");
	$id=$_POST["ID"];

	
	$link=create_connection();
	
	$sql="DELETE FROM `students`.`grade` WHERE (`no` = '$id');";
	
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
