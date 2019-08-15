<?php 
$mala= $_GET['mala'];
$qr="select * from loaisanpham where ma_loai='".$mala."'";
$ex= mysqli_query($connect,$qr);
$row= mysqli_fetch_assoc($ex);


?>
<div class="col-md-12 col-sm-12">
	<h3 class="text-center text-success">Chỉnh sửa thông tin loại </h3>
	<form action="?thamso=luu_loai" method="POST" style="width: 600px; margin: 0 auto;">
		<input type="hidden" name="mala" value="<?php echo $mala?>">
		<div class="form-group">
			<label for="">Tên loại <label>
			<input  class="form-control" type="text" name="ten_loai" value="<?php echo $row['ten_loai']?>" required>
		</div>
		<div class="form-group">
			<label for="">Ghi chú  </label>
			<input class="form-control" type="text" name="ghi_chu" value="<?php echo $row['ghi_chu']?>">
		</div>
		
		<button class="btn btn-info" type="submit">Lưu</button>

	</form>
</div>