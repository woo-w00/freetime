<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include('db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Free Time!</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Free Time!</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">전체 통계</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="chart_day.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">요일별</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="chart_mon.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">월별</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="chart_choice.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">업무별</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="usertable.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">이용고객 현황</span>
          </a>
        </li>
       
        
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
         <strong><i class="icon-user"></i><?=$_SESSION['login']?>의 현재 상태</strong>
        </li>
  
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><?php  
									$query = "SELECT counter_id, counter.store_id, select_name, store_name FROM counter LEFT JOIN store ON counter.store_id = store.store_id WHERE counter_id = 1 ";
									$result = mysqli_query($con, $query); 
									$row = mysqli_fetch_array($result);
									if($row['store_name']==$_SESSION['login'])
									{
									echo '<h1>'.$row['select_name'].'<h1>';
									}
								?>
	</div>
            </div>
            
              <span class="float-left">
			  <?php
			  $query = "SELECT waiting_num, date, calling_start, calling_end, phone_id, number.store_id, number.counter_id, lead_time, store_name FROM number LEFT JOIN counter ON number.counter_id = counter.counter_id LEFT JOIN store ON number.store_id = store.store_id WHERE calling_end = FALSE AND number.counter_id =1;";
			  $result = mysqli_query($con, $query); 
			  $row1 = mysqli_fetch_array($result);
			  if($row1['store_name']==$_SESSION['login'])
			  {
				 echo '<h4>'.'현재 대기 번호'.'<h4>'.'<h5>'.$row1['waiting_num'].' 번'.'<h5>';
			    $row2 = mysqli_num_rows($result);
			  {
					echo '<h4>'.'남은 대기 인원 수'.'<h4>'.'<h5>'.$row2.' 명'.'<h5>';
					echo '<h4>'.'현재 대기 시간'.'<h4>'.'<h5>'.$row2*$row1['lead_time'].' 분'.'<h5>';
			  }
			  
			  }
			  ?></span>
            

          </div>
        </div>
		
		
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php  
									$query = "SELECT counter_id, counter.store_id, select_name, store_name FROM counter LEFT JOIN store ON counter.store_id = store.store_id WHERE counter_id = 2";
									$result = mysqli_query($con, $query); 
									$row = mysqli_fetch_array($result);
									if($row['store_name']==$_SESSION['login'])
									{
									echo '<h1>'.$row['select_name'].'<h1>';
									}
								?></div>
            </div>
    
			  <span class="float-left">
			  <?php
			  $query = "SELECT waiting_num, date, calling_start, calling_end, phone_id, number.store_id, number.counter_id, lead_time, store_name FROM number LEFT JOIN counter ON number.counter_id = counter.counter_id LEFT JOIN store ON number.store_id = store.store_id WHERE calling_end = FALSE AND number.counter_id =2;";
			  $result = mysqli_query($con, $query); 
			  $row1 = mysqli_fetch_array($result);
			  if($row1['store_name']==$_SESSION['login'])
			  {
				 echo '<h4>'.'현재 대기 번호'.'<h4>'.'<h5>'.$row1['waiting_num'].' 번'.'<h5>';
			    $row2 = mysqli_num_rows($result);
			  {
					echo '<h4>'.'남은 대기 인원 수'.'<h4>'.'<h5>'.$row2.' 명'.'<h5>';
					echo '<h4>'.'현재 대기 시간'.'<h4>'.'<h5>'.$row2*$row1['lead_time'].' 분'.'<h5>';
			  }
			  }
			  ?></span>
             
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5"><?php  
									$query = "SELECT counter_id, counter.store_id, select_name, store_name FROM counter LEFT JOIN store ON counter.store_id = store.store_id WHERE counter_id = 3";
									$result = mysqli_query($con, $query); 
									$row = mysqli_fetch_array($result);
									if($row['store_name']==$_SESSION['login'])
									{
									echo '<h1>'.$row['select_name'].'<h1>';
									}
								?></div>
            </div>
			<span class="float-left">
            <?php
			  $query = "SELECT waiting_num, date, calling_start, calling_end, phone_id, number.store_id, number.counter_id, lead_time, store_name FROM number LEFT JOIN counter ON number.counter_id = counter.counter_id LEFT JOIN store ON number.store_id = store.store_id WHERE calling_end = FALSE AND number.counter_id =3;";
			  $result = mysqli_query($con, $query); 
			  $row1 = mysqli_fetch_array($result);
			  if($row1['store_name']==$_SESSION['login'])
			  {
				 echo '<h4>'.'현재 대기 번호'.'<h4>'.'<h5>'.$row1['waiting_num'].' 번'.'<h5>';
			    $row2 = mysqli_num_rows($result);
			  {
					echo '<h4>'.'남은 대기 인원 수'.'<h4>'.'<h5>'.$row2.' 명'.'<h5>';
					echo '<h4>'.'현재 대기 시간'.'<h4>'.'<h5>'.$row2*$row1['lead_time'].' 분'.'<h5>';
			  }
			  }
			  ?></span>
          </div>
        </div>
      </div>
   

      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Free Time! - YBJ</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
   <script src="js/sb-admin-charts.js"></script>
  </div>
</body>

</html>
