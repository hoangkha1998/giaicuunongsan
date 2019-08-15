<?php 
	$mabd= $_GET['mabd'];
	$qr ="delete from sanphamgiaicuu where ma_bai_dang='".$mabd."'";
	$ex= mysqli_query($connect, $qr);
	if ($ex) {
		thong_bao_html_roi_chuyen_trang("Xóa bài thành công","index.php?thamso=ql_baidang");
	}else{
		thong_bao_html("Xóa bài thất bại");
	trang_truoc();
	exit();
	}

 ?>