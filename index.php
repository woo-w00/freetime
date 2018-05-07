<!DOCTYPE html>
<html lang="en">
<?php
session_start();

include('db_connect.php');
if (isset($_POST['submit'])) {
    $storename = $_POST['storename'];
    $storepw = $_POST['storepw'];
	
	    
    $query = "SELECT store_name,store_pw FROM store WHERE store_name='$storename' AND store_pw='$storepw' ";
    $result = mysqli_query($con,$query);
    
    if ( mysqli_num_rows($result) > 0 ) {
            $_SESSION['login']=$storename;
            header("Location: free_time_content/index.php");
    }
    
	else {
        echo "<script> alert('Wrong storename or password!')</script>";
    }
    
}
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Free Time!!!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

	
	<!--login-->
	<link rel="icon" type="image/png" href="images_login/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_login/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor_login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_login/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_login/util.css">
	<link rel="stylesheet" type="text/css" href="css_login/main.css">
	
	
	
	
  </head>

  <body>

    <div class="overlay"></div>
    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
		  
            <div class="masthead-content text-white py-5 py-md-0">
		
             
						
		
			<div class="wrap-login100 p-t-50 p-b-30">
			 <h1 class="mb-3">Free Time!</h1>
              <p class="mb-5"><Strong>Welcome!</Strong><br>Thank you for visiting  our site.<br>When it comes to consulting site, It is going to be the best<strong> !</strong></p>
              <div class="input-group input-group-newsletter">
                      	<div class="limiter">
				<form class="login100-form validate-form" method="post" action="index.php">
					<div class="login100-form-avatar">
						<img src="images_login/freetime.gif" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						YBJ
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "adminname is required">
						<input class="input100" type="text" name="storename" placeholder="AdminName">
						<span class="focus-input100"></span>
					
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="storepw" placeholder="Password">
						<span class="focus-input100"></span>
					
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" name="submit" >
								Login
						</button>
					</div>
					</div>
				</form>
			</div>
		
	</div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>
    <script>(function($) {
  "use strict"; // Start of use strict

  // Vide - Video Background Settings
  $('body').vide({
    mp4: "mp4/bg.mp4",
    poster: "img/bg-mobile-fallback.jpg"
  }, {
    posterType: 'jpg'
  });

})(jQuery); // End of use strict
</script>


<!--===============================================================================================--->
	<script src="vendor_login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_login/bootstrap/js/popper.js"></script>
	<script src="vendor_login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js_login/main.js"></script> 

	
	
  </body>

</html>
