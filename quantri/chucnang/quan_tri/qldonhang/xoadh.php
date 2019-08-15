<?php 
	$madh= $_GET['madh'];
	$qr ="delete from donhang where ma_dh='".$madh."'";
	$ex= mysqli_query($connect, $qr);
	if ($ex) {
		thong_bao_html_roi_chuyen_trang("Xóa đơn hàng thành công","index.php?thamso=ql_donhang");
	}else{
		thong_bao_html("Xóa đơn hàng thất bại");
	trang_truoc();
	exit();
	}

 ?>