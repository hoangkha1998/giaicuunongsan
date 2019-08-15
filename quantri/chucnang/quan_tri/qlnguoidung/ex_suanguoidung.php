<?php 
$mand=$_POST['mand'];
$ten_nd=$_POST['ten_nd'];
$dia_chi=$_POST['dia_chi'];
$sdt=$_POST['sdt'];
$loai_nd=$_POST['loai_nd'];
$trangthai_nd=$_POST['trangthai_nd'];
$qr="update nguoidung set ten_nd='".$ten_nd."' , dia_chi_nd='".$dia_chi."', sdt='".$sdt."', loai_nd='".$loai_nd."',trang_thai_nd='".$trangthai_nd."' where ma_nd='".$mand."'";
$ex= mysqli_query($connect,$qr);
if ($ex) {
	thong_bao_html_roi_chuyen_trang("Sửa người dùng thành công","index.php?thamso=ql_nguoidung");
	}else{
		thong_bao_html("Sửa người dùng thất bại");
	trang_truoc();
	exit();
}
?>
