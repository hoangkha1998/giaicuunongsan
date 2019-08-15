<div class="container-fluid" style=" margin-top: 20px;">
	<h2 class="text-center text-primary">Chọn thời gian hổ trợ chuyến đi </h2>
	<form action="" method="POST">
		<p class="alert alert-warning"><strong>Lưu ý: </strong>Các thông tin có dấu <span style="color: red;">(*)</span> đều là bắt buộc.</p>
		<div class="form-group form-inline">
			<label style="width: 150px"for="">Ngày chạy <span style="color: red;">(*)</span></label>
			<input type="date" class="form-control" name="ngay_chay" required>

		</div>
		<div class="form-group form-inline">
			<label style="width: 150px" for="">Giờ chạy <span style="color: red;">(*)</span></label>
			<input type="time" class="form-control" name="gio_chay" required>
		</div>
		<div class="form-group form-inline">
			<label style="width: 150px" for="">Ghi chú </label>
			<textarea name="ghi_chu" placeholder="Ghi chú " class="form-control"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="chon" value="Lưu" class="btn btn-info" style="margin-left: 150px;">
		</div>
	</form>
</div>


<?php 
if (isset($_POST['chon'])) {
	$ngay_chay=$_POST['ngay_chay'];
	$gio_chay=$_POST['gio_chay'];
	$ma_vc =$_GET['ma_vc'];
	$ma_bai_dang=$_GET['ma_bd'];
	$ghi_chu= $_POST['ghi_chu'];
	$qr_insert ="insert into phuongtienvanchuyen(ma_vc,ma_bai_dang,ngay_chay,gio_chay,ghi_chu) values('$ma_vc','$ma_bai_dang','$ngay_chay','$gio_chay','$ghi_chu')";
	$ex_qr=mysqli_query($connect,$qr_insert);
	if (isset($ex_qr)) {		
	thong_bao_html_roi_chuyen_trang("Hổ trợ thành công","index.php");			
	}else{
		thong_bao_html("Đăng bài thất bại");
				trang_truoc();
			exit();
	}

}


?>