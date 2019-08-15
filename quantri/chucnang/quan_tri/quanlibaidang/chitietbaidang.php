<?php 
$qr="select * from sanphamgiaicuu INNER JOIN nguoidung on sanphamgiaicuu.ma_nd=nguoidung.ma_nd where ma_bai_dang='".$_GET['mabd']."'";
$ex= mysqli_query($connect,$qr);
?>
<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Chi tiết bài đăng</h3>
	<table class="table table-bordered table-hover">
		<?php while($row= mysqli_fetch_assoc($ex)): 
			$linkanh="../images/sanpham/".$row['hinh_anh'];
			?>			

			<tr>
				<td class="col-md-6">
					<table class="table table-bordered table-hover">
						<tr>
							<th colspan="6" class="text-center">Thông tin bài đăng</th>
						</tr>
						<tr>
							<th style="width:150px;">Tên sản phẩm</th>
							<td><?php echo $row['ten_sp'] ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Hình ảnh </th>
							<td><img style="width: 250px; height: 150px;" src="<?php echo $linkanh?>" alt="<?php echo $linkanh?>"></td>
						</tr>
						<tr>
							<th style="width: 150px;">Số lượng</th>
							<td><?php echo $row['so_luong']." kg" ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Đơn giá</th>
							<td><?php echo $row['don_gia']." VNĐ" ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Địa chỉ </th>
							<td><?php echo $row['dia_chi'] ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Ngày đăng</th>
							<td><?php echo $row['ngay_dang'] ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Ngày hết hạn</th>
							<td><?php echo $row['ngay_hh'] ?></td>
						</tr>
						<tr>
							<th style="width: 150px;">Mô tả</th>
							<td><?php echo $row['mo_ta'] ?></td>
						</tr>	

					</table>
					
				</td>
				<td class="col-md-6">
					<table class="table table-bordered table-hover">
						<tr>
							<th colspan="6" class="text-center">Thông tin người dùng</th>
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
			<a href="?thamso=ql_baidang" class="btn btn-info text-center">Quay lại</a>



		<?php endwhile ?>

	</table>


</div>