<html lang="en">
<?php
session_start();
//header("Content-Type:application/json;charset=utf-8");
include('db_connect.php');
$query = "SELECT counter_id, counter.store_id, select_name, store_name, lead_time FROM counter LEFT JOIN store ON counter.store_id = store.store_id";									
$result = mysqli_query($con, $query);

	$o = array();
	while($row = mysqli_fetch_array($result))
	{
		if($row->store_name==$_SESSION['login'])
		{
			if($row->counter_id==1)
			{
			$t->lead_time1 = $row->lead_time;
			}
			else if($row->counter_id==2)
			{
			$t->lead_time2 = $row->lead_time;
			}
			else
			{
			$t->lead_time3 = $row->lead_time;
			}		
		}
	}

echo json_encode($o);
?>