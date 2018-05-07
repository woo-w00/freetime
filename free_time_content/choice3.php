<?php
 $query = "SELECT * FROM counter WHERE counter_id = 3";
 $result = mysqli_query($con, $query); 
 $row = mysqli_fetch_array($result);
 
	echo '<h1>'.$row['select_name'].'<h1>';
?>