<?php 
$ma_dh= $_GET['madh'];
$qr= "delete from donhang where ma_dh='".$ma_dh."'";
$ex= mysqli_query($connect,$qr);
if (isset($ex)) {
	thong_bao_html_roi_chuyen_trang("Bạn đã xóa thành công.","index.php?menu=xem_dh");
}
 ?>