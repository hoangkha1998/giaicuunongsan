<?php 
$ma_vcdh=$_GET['ma_vc'];
$ma_dh=$_GET['madh'];
$qr1="select cuoc_phi_vc from donvivanchuyen where ma_vc='".$ma_vcdh."'";
$ex1= mysqli_query($connect,$qr1);
$result=mysqli_fetch_assoc($ex1);
$phi=$result['cuoc_phi_vc'];
$qr= "update donhang set van_chuyen ='".$ma_vcdh."',phi_vc='".$phi."' where ma_dh='".$ma_dh."'";
$ex= mysqli_query($connect,$qr);
if ($ex) {

	 thong_bao_html_roi_chuyen_trang("Chọn vận chuyển thành công , Mòi bạn tiếp tục :","index.php?menu=xem_dh");
	// unset($_SESSION['madh1']);
}else{
	thong_bao_html("Chọn vận chuyển thất bại");
	trang_truoc();
	exit();
}

 ?>