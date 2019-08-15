<?php 
ob_start();
session_start();
include('connect.php');
include("chucnang/ham/ham.php");
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trung tâm hổ trợ giải cứu nông sản</title>

	<!-- Bootstrap CSS -->
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/js/jquery.min.js">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<script src="jquery/jquery.js"></script>
	<script src="jquery/jRating.jquery.js"></script>
	<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="header col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<?php include('header.php'); ?>		
			</div>
			<div class="menu col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php include('navbar.php'); ?>
			</div>
			<div class="content col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="menuleft col-xs-2 col-lg-2 col-md-2 col-sm-2" style="left: 0;">
					<?php include('menuleft.php'); ?>
				</div>
				<div class="contenta col-xs-9 col-sm-9 col-md-8 col-lg-9">
					<?php include('content.php'); ?>
				</div>
				
			</div>
			<div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php include('footer.php'); ?>		
			</div>
		</div>
		
		<!-- jQuery -->
		<script src="bootstrap/js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/show_hide.js"></script>
	</body>
	</html>