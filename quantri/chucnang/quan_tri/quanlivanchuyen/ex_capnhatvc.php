<?php 
$mavc=$_POST['mavc'];
$ho_ten=$_POST['ho_ten'];
$sdt=$_POST['sdt'];
$tuyen_chay=$_POST['tuyen_chay'];
$cuoc_phi_vc=$_POST['cuoc_phi_vc'];


$qr="update donvivanchuyen set ten_chu_xe='".$ho_ten."' , sdt='".$sdt."', tuyen_chay='".$tuyen_chay."', cuoc_phi_vc='".$cuoc_phi_vc."' where ma_vc='".$mavc."'";
$ex= mysqli_query($connect,$qr);
if ($ex) {
	thong_bao_html_roi_chuyen_trang("Sửa thông tin vận chuyển thành công","index.php?thamso=ql_vanchuyen");
	}else{
		thong_bao_html("Sửa thông tin vận chuyển thất bại");
	trang_truoc();
	exit();
}
?>
