<?php 
	$ma_nd= $_GET['id'];
	$qr="select * from nguoidung where ma_nd='".$ma_nd."'";
	$ex=mysqli_query($connect,$qr);
	while ($row=mysqli_fetch_assoc($ex)):
 ?>

<div class="container" style="width: 500px; margin: 0 auto;">
	<table class="table bg-info">
		<h3 class="text-center text-success">Thông tin người dùng</h3>
		<tr>
			<td>Tên người bán</td>
			<td><?php echo $row['ten_nd'] ?></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><?php echo $row['dia_chi_nd'] ?></td>
		</tr>
		<tr>
			<td>Số điện thoại liên hệ</td>
			<td><?php echo $row['sdt'] ?></td>
		</tr>
		<tr>
			<td>Xếp hạng</td>
			<td><?php echo $row['xep_hang']." sao" ?></td>
		</tr>
		<tr>
			<td colspan="2"><a href="index.php" class="btn btn-info" style="margin-left: 150px">Quay lại trang chủ</a></td>
		</tr>
	</table>
</div>
 <?php endwhile ?>