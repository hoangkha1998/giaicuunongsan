<?php 
	$mala= $_GET['mala'];
	$qr ="delete from loaisanpham  where ma_loai='".$mala."'";
	$ex= mysqli_query($connect, $qr);
	if ($ex) {
		thong_bao_html_roi_chuyen_trang("Xóa loại sản phẩm thành công","index.php?thamso=qlloai");
	}else{
		thong_bao_html("Xóa loại sản phẩm thất bại");
	trang_truoc();
	exit();
	}

 ?>