<?php 
$mabd= $_GET['mabd'];
$qr="select * from sanphamgiaicuu where ma_bai_dang='".$mabd."'";
$ex= mysqli_query($connect,$qr);
$row= mysqli_fetch_assoc($ex);
 ?>
 <div class="col-md-12 col-sm-12">
	<h3 class="text-center text-success">Chỉnh sửa thông tin bài đăng </h3>
	<form action="?menu=luu_baidang" method="POST" style="width: 600px; margin: 0 auto;">
		<input type="hidden" name="mabd" value="<?php echo $mabd?>">
		<div class="form-group">
			<label for="">Tên sản phẩm </label>
			<input  class="form-control" type="text" name="ten_sp" value="<?php echo $row['ten_sp']?>" required>
		</div>
		<div class="form-group">
			<label for="">Số lượng  </label>
			<input class="form-control" type="text" name="sl" value="<?php echo $row['so_luong']." kg"?>" required>
		</div>

		<div class="form-group">
			<label for="">Đơn giá  </label>
			<input class="form-control" type="text" name="don_gia" value="<?php echo $row['don_gia']?>" required>
		</div>
		<div class="form-group">
			<label for="">Địa chỉ </label>
			<input class="form-control" type="text" name="dia_chi" value="<?php echo $row['dia_chi']?>" required>
		</div>
		<div class="form-group">
			<label for="">Mô tả sản phẩm </label>
			<textarea class="form-control" rows="5" name="mo_ta" required><?php echo $row['mo_ta'] ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Ngày đăng bán </label>
			<input class="form-control" type="date" name="ngay_dang" value="<?php echo $row['ngay_dang']?>" required>
		</div>
		<div class="form-group">
			<label for="">Ngày hết hạn giải cứu </label>
			<input class="form-control" type="date" name="ngay_hh" value="<?php echo $row['ngay_hh']?>" required>
		</div>

		<div class="form-group">
			<label for="">Trạng thái bài đăng </label>
			<select class="form-control" name="trangthai" id="">				
					<option value="0" class="text-danger">Đã bán hết </option>
					<option value="1" class="text-success">Còn hàng</option>			
			</select>
		</div>
		<button class="btn btn-info" type="submit">Lưu</button>

	</form>
</div>