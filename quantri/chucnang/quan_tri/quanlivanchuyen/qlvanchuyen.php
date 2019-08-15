<?php 

$qr="select * from donvivanchuyen ";
$ex= mysqli_query($connect,$qr);
date_default_timezone_set('Asia/Ho_Chi_Minh');

 ?>




<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Danh sách đơn vị vận chuyển</h3>
	<table class="table table-bordered table-hover">
		<tr>
			<th style="width: 50px;">STT</th>
			<th style="width: 150px;">Mã bài đăng</th>
			<th style="width: 350px;">Chủ xe</th>
			<th style="width: 150px;">Số điện thoại</th>
			<th style="width: 150px;">Tuyến chạy</th>
			<th style="width: 150px;">Cước phí</th>
			<th style="width: 150px;">Chỉnh sửa</th>
			<th style="width: 150px;">Xóa</th>
		</tr>
		<?php $i=1; while ($row= mysqli_fetch_assoc($ex)):
			
				

			
			
		 ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><a href="?thamso=chitiet_vc&mavc=<?php echo $row['ma_vc'] ?>">Xem chi tiết</a></td>
			<td><?php echo $row['ten_chu_xe'] ?></td>
			<td><?php echo $row['sdt'] ?></td>	
			<td><?php echo $row['tuyen_chay'] ?></td>	
			<td><?php echo $row['cuoc_phi_vc'] ?></td>			
			<td><a class="btn btn-success" href="?thamso=sua_tt_vc&mavc=<?php echo $row['ma_vc'] ?>"><span class="glyphicon glyphicon-refresh"></span> Chỉnh sửa </a></td>
			
			<td><a href="?thamso=xoa_vc&mavc=<?php echo $row['ma_vc'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa bài đăng')"><span class="glyphicon glyphicon-trash"></span>  Xóa bài </a></td>
		</tr>
	<?php $i++; endwhile;?>
	</table>
</div>