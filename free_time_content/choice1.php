<?php
//session_start();
 $query = "SELECT * FROM counter LEFT JOIN store ON counter.store_id = store.store_id WHERE counter_id = 1 AND store_name =$_SESSION['login']";
 $result = mysqli_query($con, $query); 
 $row = mysqli_fetch_array($result);
 
	echo '<h1>'.$row['select_name'].'<h1>';
?>