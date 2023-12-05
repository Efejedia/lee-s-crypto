<?php

include 'config/constants.php';

// if (isset($_POST['submit'])) {
// 	$email = mysqli_real_escape_string($conn, $_POST['email']);
// 	$password = mysqli_real_escape_string($conn, md5($_POST['password']));

// 	if (!empty($email) && !empty($password)) {
// 		$sql = mysqli_query($conn, "SELECT * FROM `duser` WHERE email = '{$email}' AND password = '{$password}' ");
// 		if (mysqli_num_rows($sql) > 0) { //if users cre
// 			$row = mysqli_fetch_assoc($sql);
// 			if($row['status']=='Pending'){
// 				$_SESSION['msg'] = "Sorry, you're not allow to login until admin verified your account!";
// 				header("Location:login.php");
// 			  }elseif($row['status']=='Ban'){
// 				$_SESSION['msg'] = "Sorry, your account has been banned, contact admin!";
// 				header("Location:login.php");
// 			  }else{
			
			// // $row = mysqli_fetch_assoc($sql);
			// $_SESSION['unique_id'] = $row['unique_id']; // Store the unique ID in the session
			// $_SESSION['email'] = $row['userid'];
			// // $userid = $_SESSION['unique_id'] = $row['unique_id'];
			// $_SESSION['msg'] = ' <div class="alert alert-success">Login Successful!</div>';
			// header('location:dashboard');
// 			  }
// 		} else {
// 			$_SESSION['msg'] = ' <div class="alert alert-danger">Check password or email!</div>';
// 			header('location:login');
// 		}
// 	} else {
// 		$_SESSION['msg'] = ' <div class="alert alert-danger">All input field required!</div>';
// 	}
// } 


if(isset($_POST['submit'])){ 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, md5($_POST['password']));

    //run query
    $sql = $conn->query("SELECT * FROM `duser` WHERE email = '{$email}' AND password = '{$password}' ");
    if($sql->num_rows>0){
      $row = $sql->fetch_assoc();

      if($row['status']=='Pending'){
        $_SESSION['msg'] = "Sorry, you're not allow to login until admin verified your account!";
        header("Location:login.php");
      }else if($row['status']=='Banned'){
        $_SESSION['msg'] = "Sorry, your account has been banned, contact admin!";
        header("Location:refresh.php");
      }else{
        $_SESSION['login'] =true;
        $_SESSION['unique_id'] = $row['unique_id']; // Store the unique ID in the session
			$_SESSION['email'] = $row['email'];
			// $userid = $_SESSION['unique_id'] = $row['unique_id'];
			$_SESSION['msg'] = ' <div class="alert alert-success">Login Successful!</div>';
		header('location:dashboard');
      }
    }else{
      $_SESSION['msg'] = "Sorry, E no dey!";
      header("Location:login.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 11:23:59 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/sass/bs5/images/favicon.ico">

	<title>Crypto Currency HTML Template</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

</head>

<body class="theme-warning">



	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">
						<h2 class="page-title text-white">Login</h2>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->

	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>
							<h2 class="text-primary">Let's Get Started</h2>
							<p class="mb-0">Sign in to continue to CryptoCurrency.</p>
						</div>
						<div class="p-40">
							<form action="" method="post">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" class="form-control ps-15 bg-transparent" placeholder="Email" name="email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password">
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="checkbox ms-5">
											<input type="checkbox" id="basic_checkbox_1">
											<label for="basic_checkbox_1" class="form-label">Remember Me</label>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-6">
										<div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
										<button type="submit" class="btn btn-info w-p100 mt-15" name="submit">SIGN IN</button>
									</div>
									<!-- /.col -->
								</div>
							</form>
							<div class="text-center">
								<p class="mt-15 mb-0">Don't have an account? <a href="register" class="text-warning ms-5">Register</a></p>
							</div>
						</div>
					</div>

					<div class="text-center">
						<p class="mt-20">- Login With -</p>
						<p class="d-flex gap-items-2 mb-0 justify-content-center">
							<a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							<a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							<a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>





	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<!-- Corenav Master JavaScript -->
	<script src="corenav-master/coreNavigation-1.1.3.js"></script>
	<script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

	<!-- CryptoCurrency front end -->
	<script src="js/template.js"></script>

	<?php if (isset($_SESSION['msg'])) {
		unset($_SESSION['msg']);
	} ?>

</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/sass/bs5/front-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Jun 2021 11:23:59 GMT -->

</html>