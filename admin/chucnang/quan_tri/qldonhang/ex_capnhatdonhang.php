<?php 
$madh=$_POST['madh'];
$ho_ten=$_POST['ho_ten'];
$dia_chi_gh=$_POST['dia_chi_gh'];
$ngay_giao=$_POST['ngay_giao'];

$trangthai_dh=$_POST['trangthai_dh'];
$qr="update donhang set ho_ten='".$ho_ten."' , dia_chi_gh='".$dia_chi_gh."', ngay_giao='".$ngay_giao."', trang_thai='".$trangthai_dh."' where ma_dh='".$madh."'";
$ex= mysqli_query($connect,$qr);
if ($ex) {
	thong_bao_html_roi_chuyen_trang("Sửa đơn hàng thành công","index.php?thamso=ql_donhang");
	}else{
		thong_bao_html("Sửa đơn hàng thất bại");
	trang_truoc();
	exit();
}
?>
