<?php
	include ("admin/dbconnection.php");
	include ("admin/test.php");
	extract($_REQUEST);

	$pagename = "register.php";
	$tablename = "user";

	if(isset($name)){
		insert("$tablename");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Govt.S.S.S Register</title>

	<!-- Site favicon -->
	

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="admin/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="admin/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="admin/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="register.php">
				<h3 class="logo mr-auto" style="color:#1b00ff !important;">Govt.S.S.S Naukerian</h3>
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="admin/vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Register To School</h2>
						</div>
						<form id="reg_form" action="#" method="post">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="name" placeholder="Enter Name" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="email" placeholder="Enter Email Id" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********" required>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-12">
								<div class="input-group mb-0">
										<input type="submit" class="btn btn-primary btn-lg btn-block">
										
									</div>
								
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$('document').ready(function(e){
		$('#reg_form').on('submit', (function(e){
			e.preventDefault();

			$.ajax({
				url: "<?php echo $pagename; ?>",
				type: "post",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(data){
					alert("data submitted");
					
				},
				error: function(){
					alert("something went wrong");
				}
			});
		}));
	});
</script>
</body>
</html>


