<?php
define('DB_USER', "woojae"); // db user
define('DB_PASSWORD', "YBJ11111"); // db password (mention your db password here)
define('DB_DATABASE', "free_time"); // database name
define('DB_SERVER', "ybj.cghzrrdlqojc.ap-northeast-2.rds.amazonaws.com"); // db server
 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
// Check connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>


