<?php 
$mavc= $_GET['mavc'];
$qr="select * from donvivanchuyen where ma_vc='".$mavc."'";
$ex= mysqli_query($connect,$qr);
$row= mysqli_fetch_assoc($ex);
 ?>
 <div class="col-md-12 col-sm-12">
	<h3 class="text-center text-success">Chỉnh sửa thông tin vận chuyển </h3>
	<form action="?thamso=luu_vc" method="POST" style="width: 600px; margin: 0 auto;">
		<input type="hidden" name="mavc" value="<?php echo $mavc?>">
		<div class="form-group">
			<label for="">Họ tên chủ xe </label>
			<input  class="form-control" type="text" name="ho_ten" value="<?php echo $row['ten_chu_xe']?>" required>
		</div>
		<div class="form-group">
			<label for="">Số điện thoại </label>
			<input class="form-control" type="text" name="sdt" value="<?php echo $row['sdt']?>" required>
		</div>
		<div class="form-group">
			<label for="">Tuyến chạy </label>
			<input class="form-control" type="text" name="tuyen_chay" value="<?php echo $row['tuyen_chay']?>" required>
		</div>
		<div class="form-group">
			<label for="">Cước phí </label>
			<input class="form-control" type="text" name="cuoc_phi_vc" value="<?php echo $row['cuoc_phi_vc']?>" required>
		</div>		
		<button class="btn btn-info" type="submit">Lưu</button>

	</form>
</div>