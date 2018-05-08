<?php

session_start();
include('db_connect.php');
$query = "SELECT * FROM number LEFT JOIN store ON number.store_id = store.store_id LEFT JOIN counter ON number.counter_id = counter.counter_id";
$a1= 0; $a2= 0; $a3= 0;$a4= 0;$a5= 0;$a6= 0;$a7= 0;
$result = mysqli_query($con, $query); 
while($row = mysqli_fetch_array($result))
{
if($row['store_name']==$_SESSION['login'])
{
	$datemon = new DateTime($row['date']);
    $formatdatemon = date_format($datemon,'%C');
    echo $formatdatemon;
	if($formatdatemon=="Jan")
	{
    $a1 = $a1 +1;
	}
	else if($formatdatemon=="Feb")
	{
	$a2 = $a2 +1;
	}
	else if($formatdatemon=="Mar")
	{
	$a3 = $a3 +1;
	}
	else if($formatdatemon=="Apr")
	{
	$a4 = $a4 +1;
	}
	else if($formatdatemon=="May")
	{
	$a5 = $a5 +1;
	}
	else if($formatdatemon=="Jun")
	{
	$a6 = $a6 +1;
	}
	else if($formatdatemon=="Jul")
	{
	$a7 = $a7 +1;
	}
}
}

$myObj = new stdClass();
$myObj->one = $a1;
$myObj->two = $a2;
$myObj->three = $a3;
$myObj->four = $a4;
$myObj->five = $a5;
$myObj->six = $a6;
$myObj->seven = $a7;

$myJSON = json_encode($myObj);

echo $myJSON;
?>