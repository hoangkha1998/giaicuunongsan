<?php 
	$mand= $_GET['mand'];
	$qr ="delete from nguoidung where ma_nd='".$mand."'";
	$ex= mysqli_query($connect, $qr);
	if ($ex) {
		thong_bao_html_roi_chuyen_trang("Xóa người dùng thành công","index.php?thamso=ql_nguoidung");
	}else{
		thong_bao_html("Xóa người dùng thất bại");
	trang_truoc();
	exit();
	}

 ?>