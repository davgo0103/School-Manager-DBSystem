<?php
require_once("dbtools.inc.php");

$user = $_POST['User'];
$pass = $_POST['Pass'];

$link=create_connection();
$sql = "SELECT * FROM students.userdata WHERE `username` = '$user' and `password` = '$pass';";
$result=execute_sql("students", $sql, $link);
	
if(mysql_num_rows($result) != 1){
	echo '{"success": false}';
}
else{
	setcookie('Admin', 'true', time()+8640000,'/');
	echo '{"success": true}';
}
?>