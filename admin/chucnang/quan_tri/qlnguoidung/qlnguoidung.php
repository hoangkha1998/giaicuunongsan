<?php 

$qr="select * from nguoidung";
$ex= mysqli_query($connect,$qr);
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>




<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Danh sách người dùng</h3>
	<table class="table table-bordered table-hover">
		<tr>
			<th style="width: 50px;">STT</th>
			<th style="width: 150px;">Mã người dùng</th>
			<th style="width: 250px;">Tên người dùng</th>
			<th style="width: 350px;">Địa chỉ</th>
			<th style="width: 150px;">Trạng thái</th>
			<th style="width: 150px;">Loại người dùng</th>
			<th style="width: 150px;">Chỉnh sửa </th>
			<th style="width: 150px;">xóa  </th>
		</tr>
		<?php $i=1; while ($row= mysqli_fetch_assoc($ex)):
		if ($row['trang_thai_nd']==1) {
			$trang_thai="Bình thường.";
		}elseif($row['trang_thai_nd']==0){
			$trang_thai="Bị khóa";
		}
		if ($row['loai_nd']==1) {
			$loai="Khách hàng.";
		}elseif($row['loai_nd']==2){
			$loai="Quản trị viên";
		}

		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><a href="?thamso=chitietnd&mand=<?php echo $row['ma_nd'] ?>">Xem chi tiết</a></td>
			<td><?php echo $row['ten_nd'] ?></td>
			<td><?php echo $row['dia_chi_nd'] ?></td>
			<?php if($row['trang_thai_nd']==1){?>
				<td><span class="btn btn-success"><?php echo $trang_thai; ?></span></td>
			<?php }elseif($row['trang_thai_nd']==0){?>
				<td><span class="btn btn-warning"><?php echo $trang_thai; ?></span></td>
			<?php } ?>			
			<?php if($row['loai_nd']==1){?>
				<td><span class="btn btn-info"><?php echo $loai; ?></span></td>
			<?php }elseif($row['loai_nd']==2){?>
				<td><span class="btn btn-warning"><?php echo $loai; ?></span></td>
			<?php } ?>	
			
			<td><a href="?thamso=sua_nguoidung&mand=<?php echo $row['ma_nd'] ?>" onclick="return confirm('Bạn chắc chắn muốn sửa thông tin người dùng?')"><span class="glyphicon glyphicon-refresh"></span>  Chỉnh sửa </a></td>
			<td><a href="?thamso=xoa_nguoidung&mand=<?php echo $row['ma_nd'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa người dùng')"><span class="glyphicon glyphicon-trash"></span>  Xóa  </a></td>
		</tr>
		<?php $i++; endwhile;?>
	</table>
</div>