<?php 
	$mabd= $_GET['mabd'];
	$qr ="update sanphamgiaicuu set trang_thai= 1 where ma_bai_dang='".$mabd."'";
	$ex= mysqli_query($connect, $qr);
	if ($ex) {
		thong_bao_html_roi_chuyen_trang("Duyệt bài thành công","index.php?thamso=duyet_baidang");
	}else{
		thong_bao_html("Duyệt bài thất bại");
	trang_truoc();
	exit();
	}

 ?>