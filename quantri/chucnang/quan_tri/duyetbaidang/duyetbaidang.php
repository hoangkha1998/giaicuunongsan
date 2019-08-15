<?php 

$qr="select * from sanphamgiaicuu INNER JOIN nguoidung on sanphamgiaicuu.ma_nd=nguoidung.ma_nd where trang_thai=0";
$ex= mysqli_query($connect,$qr);
date_default_timezone_set('Asia/Ho_Chi_Minh');

 ?>




<div class="col-sm-12 col-md-12 bg-success">
	<h3 class="text-center text-warning">Danh sách bài đăng</h3>
	<table class="table table-bordered table-hover">
		<tr>
			<th style="width: 50px;">STT</th>
			<th style="width: 150px;">Mã bài đăng</th>
			<th style="width: 350px;">Nội dung</th>
			<th style="width: 150px;">Ngày đăng</th>
			<th style="width: 150px;">Duyệt</th>
			<th style="width: 150px;">Tình trạng</th>
			<th style="width: 150px;">Xóa</th>
		</tr>
		<?php $i=1; while ($row= mysqli_fetch_assoc($ex)):
			
			$ngay_hh=strtotime($row['ngay_hh']);
			$ngay_dang=strtotime($row['ngay_dang']);
			$ngay_ht=strtotime(date('Y-m-d'));
			$kq=($ngay_hh - $ngay_dang)/(24*60*60);
			$kq1=($ngay_ht - $ngay_dang)/(24*60*60);
			if ($kq > $kq1) {
				$tinh_trang="Còn ".$kq." ngày";
			}else{
				$tinh_trang="Đã hết hạn giải cứu";
			}

			
			
		 ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><a href="?thamso=chitietbd&mabd=<?php echo $row['ma_bai_dang'] ?>">Xem chi tiết</a></td>
			<td><?php echo $row['mo_ta'] ?></td>
			<td><?php echo $row['ngay_dang'] ?></td>			
			<td><a class="btn btn-success" href="?thamso=duyet&mabd=<?php echo $row['ma_bai_dang'] ?>">Duyệt bài</a></span></td>
			<td><span class="btn btn-info"><?php echo $tinh_trang; ?></span></td>
			<td><a href="?thamso=xoa_baidang" onclick="return confirm('Bạn chắc chắn muốn xóa bài đăng')"><span class="glyphicon glyphicon-trash"></span>  Xóa bài </a></td>
		</tr>
	<?php $i++; endwhile;?>
	</table>
</div>