<?php
setcookie("Admin", "", time()-3600,'/');
header("Location: ../index.php");
?>