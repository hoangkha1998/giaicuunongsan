
<?php 
$ma_dh= $_GET['madh'];
$qr= "select * from donhang inner join sanphamgiaicuu on donhang.ma_bai_dang= sanphamgiaicuu.ma_bai_dang where ma_dh='".$ma_dh."'";
$ex= mysqli_query($connect,$qr);


?>
<table class="table table-bordered table-inverse table-hover" style="width: 900px;">
	<h3 class="text-center text-success">Thông tin chi tiết đơn hàng</h3>
	<thead>
		<tr class="text-info">
			<th style="width: 400px;">Tên sản phẩm</th>
			<th style="width: 100px;">Hình ảnh</th>
			<th style="width: 200px;">Số lượng </th>
			<th style="width: 200px;">Đơn giá</th>
			<th style="width: 400px;">Phí vận chuyển</th>
			<th style="width: 200px;">Tổng tiền</th>
			<th style="width: 200px;">Ngày đặt</th>
			<th style="width: 200px;">Ngày giao</th>
		</tr>
	</thead>
	<tbody>
		<?php while($row= mysqli_fetch_assoc($ex)):
			$linkanh= "images/sanpham/".$row['hinh_anh'];
		 ?>
		<tr>

			<td><?php echo $row['ten_sp'] ?></td>
			<td><img style="width: 100px; height: 100px;" src="<?php echo $linkanh;?>" alt="ádđ"></td>
			<td><?php echo $row['so_luong_dat']." kg"; ?></td>
			<td><?php echo $row['don_gia']." VNĐ" ?></td>
			<td><?php echo $row['phi_vc']." VNĐ"; ?></td>
			<td><?php echo $row['tong_tien']+$row['phi_vc']." VNĐ" ?></td>
			<td><?php echo $row['ngay_dat'] ?></td>
			<td><?php echo $row['ngay_giao'] ?></td>
		</tr>
	<?php endwhile ?>
	<tr>
		<td colspan="8"><a href="?menu=xem_dh" class="btn btn-info">Quay lại</a></td>
	</tr>
	</tbody>
</table>
