<?php 

$qr="select * from loaisanpham";
$ex= mysqli_query($connect,$qr);
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>
<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Danh sách loại sản phẩm</h3>
	<table class="table table-bordered table-hover">
		<tr><td colspan="5"><a href="?thamso=themmoi" class="btn btn-primary">Thêm mới </a></td></tr>
		<tr>
			<th style="width: 50px;">STT</th>			
			<th style="width: 250px;">Tên loại sản phẩm</th>
			<th style="width: 150px;">Ghi chú </th>			
			<th style="width: 150px;">Chỉnh sửa </th>
			<th style="width: 150px;">xóa  </th>
		</tr>
		<?php $i=1; while ($row= mysqli_fetch_assoc($ex)):?>
		<tr>
			<td><?php echo $i; ?></td>
			
			<td><?php echo $row['ten_loai'] ?></td>
			<td><?php echo $row['ghi_chu'] ?></td>
			
			<td><a href="?thamso=sua_loai&mala=<?php echo $row['ma_loai'] ?>" onclick="return confirm('Bạn chắc chắn muốn sửa thông tin loại?')"><span class="glyphicon glyphicon-refresh"></span>  Chỉnh sửa </a></td>
			<td><a href="?thamso=xoa_loai&mala=<?php echo $row['ma_loai'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa loại')"><span class="glyphicon glyphicon-trash"></span>  Xóa  </a></td>
		</tr>
		<?php $i++; endwhile;?>
	</table>
</div>