<?php 
$mand= $_GET['mand'];
$qr="select * from nguoidung where ma_nd='".$mand."'";
$ex= mysqli_query($connect,$qr);
$row= mysqli_fetch_assoc($ex);


?>
<div class="col-md-12 col-sm-12">
	<h3 class="text-center text-success">Chỉnh sửa thông tin người dùng </h3>
	<form action="?thamso=luu" method="POST" style="width: 600px; margin: 0 auto;">
		<input type="hidden" name="mand" value="<?php echo $mand?>">
		<div class="form-group">
			<label for="">Họ tên người dùng </label>
			<input  class="form-control" type="text" name="ten_nd" value="<?php echo $row['ten_nd']?>" required>
		</div>
		<div class="form-group">
			<label for="">Địa chỉ  </label>
			<input class="form-control" type="text" name="dia_chi" value="<?php echo $row['dia_chi_nd']?>" required>
		</div>
		<div class="form-group">
			<label for="">Số điện thoại  </label>
			<input class="form-control" type="text" name="sdt" value="<?php echo $row['sdt']?>" required>
		</div>
		<div class="form-group">
			<label for="">Loại người dùng </label>
			<select class="form-control" name="loai_nd" id="">
				<!-- <option value="" hidden="chon" selected></option>	 -->			
					<option value="1">Khách hàng</option>
					<option value="2">Admin</option>
			</select>
		</div>

		<div class="form-group">
			<label for="">Trạng thái người dùng </label>
			<select class="form-control" name="trangthai_nd" id="">				
					<option value="1">Bình thường</option>
					<option value="0">Khóa tài khoản</option>
				
			</select>
		</div>
		<button class="btn btn-info" type="submit">Lưu</button>

	</form>
</div>