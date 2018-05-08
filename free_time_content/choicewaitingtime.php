<?php

session_start();
include('db_connect.php');
$query = "SELECT counter_id, counter.store_id, select_name, store_name, lead_time FROM counter LEFT JOIN store ON counter.store_id = store.store_id";									
$result = mysqli_query($con, $query); 
while($row = mysqli_fetch_array($result))
{
if($row['store_name']==$_SESSION['login'])
{
	if($row['counter_id']==1)
	{
		$a = $row['lead_time'];
	}
	else if($row['counter_id']==2)
	{
		$b = $row['lead_time'];
	}
	else
	{
		$c = $row['lead_time'];
	}		
}
}
$myObj = new stdClass();
$myObj->name = $a;
$myObj->age = $b;
$myObj->city = $c;

$myJSON = json_encode($myObj);

echo $myJSON;
?>