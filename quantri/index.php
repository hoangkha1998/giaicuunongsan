<?php 
// ob_start();
session_start();
if (!isset($_SESSION['username'])) {
	$a=$_GET['thamso'];
	$_SESSION['username']=$a;
}
include('../connect.php');
include('../chucnang/ham/ham.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản Trị</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/js/jquery.min.js">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
	<script src="../jquery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<style>
		body{
			width: 90%;
			margin:0 auto;
		}
		.noidung{
			/*height: 500px;*/
			border: 1px solid #000;
			margin-top: 5px;
			height: 500px;
			overflow-y: scroll;
		}	
	</style>
</head>
<body>
	<div class="container embed-responsive">
		<header id="header" class="text-center">
			<h1>ĐÂY LÀ TRANG QUẢN TRỊ</h1>
		</header><!-- /header -->
		<content>
			<div  class="collapse navbar-collapse bg-success ">

				<ul class="nav navbar-nav" style="width: 100%; padding-left: 100px ">				
					<li><a href="index.php?thamso=ql_vanchuyen">Quản lí vận chuyển</a></li>
					<li><a href="?thamso=duyet_baidang">Duyệt bài đăng </a></li>
					<li><a href="?thamso=ql_baidang">Quản lí bài đăng </a></li>
					<li><a href="?thamso=ql_nguoidung">Quản lí người dùng</a></li>
					<li><a href="?thamso=ql_donhang">Quản lí đơn hàng</a></li>					
					<li><a href="?thamso=logout" class="btn btn-danger" style="margin-right: 5px;">Đăng xuất</a></li>	
					<li>
						<div class="dropdown" style="padding-top: 10px;">
							<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Thêm
								<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="?thamso=qlloai">Thêm loại sản phẩm</a></li>
									<!-- <li><a href="?thamso=tk_baidang">Thống kê bài đăng</a></li>
									<li><a href="#">JavaScript</a></li> -->
								</ul>
							</div>				
						</li>
					</ul>
				</div>
				<div class="noidung col-sm-12 col-md-12">
					<?php include('chucnang/menu_admin.php'); ?>

				</div>

			</content>
		</div>


	</body>
	</html>