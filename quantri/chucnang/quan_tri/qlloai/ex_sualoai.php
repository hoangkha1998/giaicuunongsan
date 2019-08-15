<?php 
$mala=$_POST['mala'];
$ten_loai=$_POST['ten_loai'];
$ghi_chu=$_POST['ghi_chu'];

$qr="update loaisanpham set ten_loai='".$ten_loai."' , ghi_chu='".$ghi_chu."' where ma_loai='".$mala."'";
$ex= mysqli_query($connect,$qr);
if ($ex) {
	thong_bao_html_roi_chuyen_trang("Sửa loại sản phẩm thành công","index.php?thamso=qlloai");
	}else{
		thong_bao_html("Sửa loại sản phẩm thất bại");
	trang_truoc();
	exit();
}
?>
