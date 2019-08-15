<?php
$qr_select="select * from donhang INNER JOIN nguoidung on donhang.ma_nd = nguoidung.ma_nd where donhang.ma_nd='".$_SESSION['ma_nd']."'";
$ex_select = mysqli_query($connect,$qr_select);


?>

<div style="">
	<table class="table table-bordered bg-info">
		<h3 class="text-center">Danh sách đơn hàng </h3>
		<tr>
			<th class="text-success">Khách hàng </th>
			<th class="text-success">Sản phẩm</th>
			<th class="text-success">Số lượng</th>
			<th class="text-success">Giá</th>
			<th class="text-success">Vận chuyển</th>
			<th class="text-success">Trạng thái </th>
			<th class="text-success">Hủy</th>
		</tr>
		<?php while ($row= mysqli_fetch_assoc($ex_select)):
			if ($row['trang_thai']==0) {
				$trang_thai="Đang xử lí";
			}elseif ($row['trang_thai']==1) {
				$trang_thai="Đã xử lí đơn hàng";
			}
			?>
			<tr>
				<td class="text-warning"><?php echo $row['ten_nd']; ?></td>
				<td><?php echo $row['ten_sp'] ?></td>
				<td><?php echo $row['so_luong'] ?></td>
				<td><?php echo $row['tong_tien'] ?></td>
				<td><a href="?menu=chon_vc">Chọn vận chuyển</a></td>
				<td><?php echo $trang_thai; ?></td>
				<?php 
				if ($trang_thai=="Đang xử lí") {?>
					<td><a href="?menu=huydh&madh=<?php echo $row['ma_dh']?>" onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng?');"><i class="glyphicon glyphicon-trash"></i></a></td>
					<?php
				}
				?>
				<?php 
				if ($trang_thai=="Đã xử lí đơn hàng") {?>
					<td><a class="disabled" title="Bạn không thể xóa"><i class="glyphicon glyphicon-trash"></i></a></td>
					<?php
				}
				?>
				
				
			</tr>
		<?php endwhile ?>	
	</table>
</div>
