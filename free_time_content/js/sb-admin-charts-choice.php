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
		$a=$row['lead_time'];
	else if($row['counter_id']==2)
		$b=$row['lead_time'];
	else
		$c=$row['lead_time'];		
}
}
?>
<script>
// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example

// -- Pie Chart Example 업무별 대기시간
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["choice", "choice2", "choice1"],
    datasets: [{
      data: [<?=$a?>,<?=$b?>,<?=$c?>],
      backgroundColor: ['#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
</script>