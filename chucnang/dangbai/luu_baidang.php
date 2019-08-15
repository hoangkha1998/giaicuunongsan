<?php 
$mabd=$_POST['mabd'];
$ten_sp=$_POST['ten_sp'];
$sl=$_POST['sl'];
$don_gia=$_POST['don_gia'];
$dia_chi=$_POST['dia_chi'];
$mo_ta=$_POST['mo_ta'];
$ngay_dang=$_POST['ngay_dang'];
$ngay_hh=$_POST['ngay_hh'];
$trangthai=$_POST['trangthai'];

$qr="update sanphamgiaicuu set ten_sp='".$ten_sp."' , so_luong='".$sl."', don_gia='".$don_gia."',dia_chi='".$dia_chi."',ngay_dang='".$ngay_dang."', ngay_hh='".$ngay_hh."',mo_ta='".$mo_ta."', trang_thai='".$trangthai."' where ma_bai_dang='".$mabd."'";
$ex= mysqli_query($connect,$qr);
if ($ex) {
	thong_bao_html_roi_chuyen_trang("Cập nhật bài đăng thành công","index.php?menu=ql_baidang");
	}else{
		thong_bao_html("Cập nhật bài đăng thất bại");
	trang_truoc();
	exit();
}
?>
