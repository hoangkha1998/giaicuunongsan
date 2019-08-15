<?php 
$mavc= $_GET['mavc'];
$select ="select * from phuongtienvanchuyen where ma_vc='".$mavc."'";
$ex_select=mysqli_query($connect,$select);
while ($row=mysqli_fetch_assoc($ex_select)) {
	if ($mavc===$row['ma_vc']) {
		$qr1="delete from phuongtienvanchuyen where id='".$row['id']."'";
		$ex1=mysqli_query($connect,$qr1);
		if ($ex1) {
			$qr ="delete from  donvivanchuyen where ma_vc='".$mavc."'";
			$ex= mysqli_query($connect, $qr);
			if ($ex) {
				thong_bao_html_roi_chuyen_trang("Xóa phương tiện vận chuyển thành công","index.php?thamso=ql_vanchuyen");
			}
		}else{
			thong_bao_html("vận chuyển thất bại");
			trang_truoc();
			exit();
		}
	}

	// }else{
	// 	$qr ="delete from  donvivanchuyen where ma_vc='".$mavc."'";
	// 		$ex= mysqli_query($connect, $qr);
	// 		if ($ex) {
	// 			thong_bao_html_roi_chuyen_trang("Xóa phương tiện vận chuyển thành công","index.php?thamso=ql_vanchuyen");
	// 		}else{
	// 			thong_bao_html("Xóa phương tiện vận chuyển thất bại");
	// 			trang_truoc();
	// 			exit();
	// 		}
	// }
}
?>