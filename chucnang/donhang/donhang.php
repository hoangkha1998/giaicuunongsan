<?php
$qr_select="select * from donhang INNER JOIN nguoidung on donhang.ma_nd = nguoidung.ma_nd where donhang.ma_nd='".$_SESSION['ma_nd']."'";
$ex_select = mysqli_query($connect,$qr_select);


?>

<div style="width: 900px;">
	<table class="table table-bordered bg-info">
		<h3 class="text-center">Danh sách đơn hàng </h3>
		<tr>
			
			<th class="text-success" style="width: 200px;">Ngày tạo</th>
			<th class="text-success" style="width: 100px;">Mã đơn hàng</th>
			<th class="text-success" style="width: 400px;">Thông tin đặt hàng</th>
			<th class="text-success" style="width: 100px;">Tổng tiền</th>
			<th class="text-success" style="width: 300px;">Vận chuyển</th>
			<th class="text-success" style="width: 300px;">Thời gian giao hàng</th>
			<th class="text-success" style="width: 200px;">Trạng thái </th>
			<th class="text-success" style="width: 50px;">Hủy</th>
		</tr>
		<?php $tong=0; while ($row= mysqli_fetch_assoc($ex_select)):
			if ($row['trang_thai']==0) {
				$trang_thai="Đang xử lí";
			}elseif ($row['trang_thai']==1) {
				$trang_thai="Đã xử lí đơn hàng";
			}elseif ($row['trang_thai']==2) {
				$trang_thai="Đã giao hàng thành công";
			}
			$tongtien=$row['tong_tien']+$row['phi_vc']
			
			?>
			<tr>
				
				<td><?php echo $row['ngay_dat'] ?></td>
				<td><a href="?menu=xem_ct&madh=<?php echo $row['ma_dh'] ?>"><?php echo $row['ma_dh'] ?></a></td>
				<td><?php echo $row['dia_chi_gh'] ?></td>
				<td><?php echo number_format($tongtien,0,",",".") ?></td>
				<td>
				<!-- <?php 
					if ($row['van_chuyen']!="") {?>
					<a href="?menu=chon_tg_vc"><?php echo $row['van_chuyen'] ?></a>
				<?php	}else {?>
					<a href="?menu=chon_vc&mabd=<?php echo $row['ma_bai_dang']?>&madh=<?php echo $row['ma_dh']?>">Chọn vận chuyển</a>
				<?php }

				 ?> -->
				 <?php if ($row['trang_thai']==1||$row['trang_thai']==2) {				 	
				 
					if ($row['van_chuyen']!="") {?>
					<a href="" class="disabled" title="Bạn không thể chọn "><?php echo $row['van_chuyen'] ?></a>
				<?php	}else {?>
					<a href="?menu=chon_vc&mabd=<?php echo $row['ma_bai_dang']?>&madh=<?php echo $row['ma_dh']?>">Chọn vận chuyển</a>
				<?php }}
				 ?>
				 <?php if ($row['trang_thai']==0) {				 	
				 
					if ($row['van_chuyen']!="") {?>
					<a href="?menu=chon_vc&mabd=<?php echo $row['ma_bai_dang']?>&madh=<?php echo $row['ma_dh']?>"><?php echo $row['van_chuyen'] ?></a>
				<?php	}else {?>
					<a href="?menu=chon_vc&mabd=<?php echo $row['ma_bai_dang']?>&madh=<?php echo $row['ma_dh']?>">Chọn vận chuyển</a>
				<?php }}
				 ?>
				</td>
				<td><?php echo $row['ngay_giao'] ?></td>	
				<td><?php echo $trang_thai; ?></td>
				<?php 
				if ($row['trang_thai']==0) {?>
					<td><a href="?menu=huydh&madh=<?php echo $row['ma_dh']?>" onclick="return confirm('Bạn chắc chắn muốn hủy đơn hàng?');"><i class="glyphicon glyphicon-trash"></i></a></td>
					<?php
				}
				?>
				<?php 
				if ($row['trang_thai']==1||$row['trang_thai']==2) {?>
					<td><a class="disabled" title="Bạn không thể xóa vì đơn hàng đã được xử lí"><i class="glyphicon glyphicon-trash"></i></a></td>
					<?php
				}
				$tong+=$tongtien;
				?>
				
				
			</tr>
		<?php endwhile ;?>	
		<tr>
			<!-- <td colspan="2">Phí vận chuyển</td>
			<td colspan="2"><span class="btn btn-info"><?php echo " VNĐ" ?></span></td> -->
			<td colspan="4">Tổng tiền đơn hàng</td>
			<td colspan="4"><span class="btn btn-info"><?php echo number_format($tong,0,",",".")." VNĐ" ?></span></td>
		</tr>
	</table>
</div>
