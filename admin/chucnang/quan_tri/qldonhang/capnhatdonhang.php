<?php 
$madh= $_GET['madh'];
$qr="select * from donhang where ma_dh='".$madh."'";
$ex= mysqli_query($connect,$qr);
$row= mysqli_fetch_assoc($ex);
 ?>
 <div class="col-md-12 col-sm-12">
	<h3 class="text-center text-success">Chỉnh sửa thông tin đơn hàng </h3>
	<form action="?thamso=luu_dh" method="POST" style="width: 600px; margin: 0 auto;">
		<input type="hidden" name="madh" value="<?php echo $madh?>">
		<div class="form-group">
			<label for="">Họ tên người nhận </label>
			<input  class="form-control" type="text" name="ho_ten" value="<?php echo $row['ho_ten']?>" required>
		</div>
		<div class="form-group">
			<label for="">Địa chỉ  </label>
			<input class="form-control" type="text" name="dia_chi_gh" value="<?php echo $row['dia_chi_gh']?>" required>
		</div>
		<div class="form-group">
			<label for="">Ngày giao hàng  </label>
			<input class="form-control" type="date" name="ngay_giao" value="<?php echo $row['ngay_giao']?>" required>
		</div>
		

		<div class="form-group">
			<label for="">Trạng thái đơn hàng </label>
			<select class="form-control" name="trangthai_dh" id="">				
					<option value="0">Chưa xử lí</option>
					<option value="1">Đã xử lí</option>
					<option value="2">Đã giao hàng thành công</option>
				
			</select>
		</div>
		<button class="btn btn-info" type="submit">Lưu</button>

	</form>
</div>