<?php 
$qr="select * from donhang INNER JOIN nguoidung on donhang.ma_nd=nguoidung.ma_nd   where ma_dh='".$_GET['madh']."'";
$ex= mysqli_query($connect,$qr);

?>
<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Chi tiết đơn hàng</h3>
	<table class="table table-bordered table-hover">
		<?php while($row= mysqli_fetch_assoc($ex)): 
			
			?>			

			<tr>
				<td class="col-md-6 col-sm-6">
					<table class="table table-bordered table-hover">
						<tr>
							<th colspan="6" class="text-center">Thông tin đơn hàng</th>
						</tr>
						<tr>
							<th style="width:200px;">Tên sản phẩm</th>
							<td><?php echo $row['ten_sp'] ?></td>
						</tr>
						
						<tr>
							<th style="width: 200px;">Số lượng</th>
							<td><?php echo $row['so_luong_dat']." kg" ?></td>
						</tr>
						<tr>
							<th style="width: 200px;">Tổng tiền</th>
							<td><?php echo $row['tong_tien']." VNĐ" ?></td>
						</tr>
						<tr>
							<th style="width: 200px;">Địa chỉ </th>
							<td><?php echo $row['dia_chi_gh'] ?></td>
						</tr>
						<tr>
							<th style="width: 200px;">Họ tên người nhận hàng </th>
							<td><?php echo $row['ho_ten'] ?></td>
						</tr>
						
					</table>
					
				</td>
				<td class="col-md-6">
					<table class="table table-bordered table-hover">
						<tr>
							<th colspan="6" class="text-center">Thông tin vận chuyển</th>
						</tr>
						<tr>
							<th style="width:150px;">Tên người đăng</th>
							<td><?php echo $row['ten_nd'] ?></td>
						</tr>						
						<tr>
							<th style="width: 150px;">Địa chỉ người đăng</th>
							<td><?php echo $row['dia_chi_nd'] ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Số điện thoại liên hệ</th>
							<td><?php echo $row['sdt'] ?></td>
						</tr>
						

					</table>
				</td>
			</tr>
			<a href="?thamso=ql_donhang" class="btn btn-info text-center">Quay lại</a>



		<?php endwhile ?>

	</table>


</div>