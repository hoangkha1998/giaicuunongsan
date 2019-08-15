<?php 
	//session_start(); 
?>
<div class="header col-md-12 col-lg-12">
	<div class="logo col-md-4 col-lg-4">
		<a href="index.php" title="Trang chủ"><img class="header_logo" src="images/logo/logo.png" alt=""></a>
		
	</div>
	<div class="search col-md-4 col-lg-4">
		<form class="searchh" action="?menu=search" action="post">
			<input type="hidden" name="menu" value="search">
			<input class="form-control" type="search" name="search" placeholder="Nhập tên sản phẩm..">
			<button type="submit" class="form-control" name="submit"><span class="fa fa-search"></span></button>
		</form>
	</div>
	
	<div class="col-md-4 col-lg-4">
		<?php 
		if(isset($_SESSION['username'])){
			include('chucnang/dang_ky_dang_nhap/user_info.php');
		}
		else
		{
			?>
			<div class="responsive_log">
				<a href="?menu=dang_nhap" class="btn btn-info">Đăng nhập</a>
				<a href="?menu=dang_ky" class="btn btn-info">Đăng ký</a>	
			</div>
			<?php
		}				

		?>
	</div>
</div>
