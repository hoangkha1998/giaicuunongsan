<?php 
$qr="select * from donvivanchuyen INNER JOIN phuongtienvanchuyen on donvivanchuyen.ma_vc=phuongtienvanchuyen.ma_vc where donvivanchuyen.ma_vc='".$_GET['mavc']."'";
$ex= mysqli_query($connect,$qr);
?>
<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Chi tiết vận chuyển</h3>
	<table class="table table-bordered table-hover">
					
<table class="table table-bordered table-hover">
		<tr>
			<th style="width: 150px;">Mã bài đăng</th>			
			<th style="width: 350px;">Chủ xe</th>
			<th style="width: 150px;">Số điện thoại</th>
			<th style="width: 150px;">Tuyến chạy</th>
			<th style="width: 150px;">Cước phí</th>
			<th style="width: 150px;">Chỉnh sửa</th>
			<th style="width: 150px;">Xóa</th>
		</tr>
		<?php  while ($row= mysqli_fetch_assoc($ex)):?>
		<tr>
			<td><?php echo $row['ma_bai_dang'] ?></td>			
			<td><?php echo $row['ten_chu_xe'] ?></td>
			<td><?php echo $row['sdt'] ?></td>	
			<td><?php echo $row['tuyen_chay'] ?></td>	
			<td><?php echo number_format($row['cuoc_phi_vc'],0,",",".")." đ"  ?></td>			
			<td><a class="btn btn-success" href="?menu=sua_tt_vc&mavc=<?php echo $row['ma_vc'] ?>"><span class="glyphicon glyphicon-refresh"></span> Chỉnh sửa </a></td>
			
			<td><a href="?menu=xoa_vc&mavc=<?php echo $row['ma_vc'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa bài đăng')"><span class="glyphicon glyphicon-trash"></span>  Xóa bài </a></td>
		</tr>
	<?php endwhile;?>
	</table>
			<a href="?menu=ql_vanchuyen" class="btn btn-info text-center">Quay lại</a>




	</table>


</div>