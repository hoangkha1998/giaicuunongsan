<?php 

$qr="select * from donhang ";
$ex= mysqli_query($connect,$qr);
date_default_timezone_set('Asia/Ho_Chi_Minh');

?>




<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Danh sách đơn hàng</h3>
	<table class="table table-bordered table-hover">
		<tr>
			<th style="width: 50px;">STT</th>
			<th style="width: 150px;">Mã đơn hàng</th>
			<th style="width: 350px;">Tổng tiền</th>
			<th style="width: 150px;">Ngày đặt</th>
			<th style="width: 150px;">Ngày giao</th>
			<th style="width: 150px;">Trạng thái</th>
			<th style="width: 150px;">Tình trạng</th>
			<th style="width: 200px;">Xóa</th>
		</tr>
		<?php $i=1; while ($row= mysqli_fetch_assoc($ex)):
		// if ($row['trang_thai']==1) {
		// 	$trang_thai="Đã duyệt.";
		// }elseif($row['trang_thai']==0){
		// 	$trang_thai="Chưa duyệt";
		// }
		// $ngay_hh=strtotime($row['ngay_hh']);
		// $ngay_dang=strtotime($row['ngay_dang']);
		// $ngay_ht=strtotime(date('Y-m-d'));
		// $kq=($ngay_hh - $ngay_dang)/(24*60*60);
		// $kq1=($ngay_ht - $ngay_dang)/(24*60*60);
		if ($row['trang_thai']==0) {
			$tinh_trang="Đã đặt hàng";
		}elseif ($row['trang_thai']==1){
			$tinh_trang="Đã xử lí đơn hàng";
		}



		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><a href="?thamso=chitietdh&madh=<?php echo $row['ma_dh'] ?>">Xem chi tiết</a></td>
			<td><?php echo $row['tong_tien'] ?></td>
			<td><?php echo $row['ngay_dat'] ?></td>
			<td><?php echo $row['ngay_giao'] ?></td>
			<?php if($row['trang_thai']==1){?>
				<td><span class="btn btn-success"><?php echo $tinh_trang; ?></span></td>
			<?php }elseif($row['trang_thai']==0){?>
				<td><span class="btn btn-warning"><?php echo $tinh_trang; ?></span></td>
			<?php } ?>			
			<td><a href="?thamso=duyetdh&madh=<?php echo $row['ma_dh']?>" class="btn btn-primary">Cập nhật đơn hàng</a></td>
			
			<td><a href="?thamso=xoa_dh&madh=<?php echo $row['ma_dh'] ?>" onclick="return confirm('Bạn chắc chắn muốn xóa bài đăng')"><span class="glyphicon glyphicon-trash"></span>  Xóa đơn hàng </a></td>
		</tr>
		<?php $i++; endwhile;?>
	</table>
</div>