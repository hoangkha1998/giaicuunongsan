<?php 
$madh=$_GET['madh'];


$qrvc="select * from donvivanchuyen INNER JOIN phuongtienvanchuyen on donvivanchuyen.ma_vc= phuongtienvanchuyen.ma_vc where phuongtienvanchuyen.ma_bai_dang='".$_GET['mabd']."'";
$exvc=mysqli_query($connect,$qrvc);

// $ma_dh=$_GET['ma_dh'];

?>
<table class="table table-bordered bg-success">
	<h3 class="text-center">Thông tin vận chuyển</h3>
	<tr class="text-danger">					
		<th style="width: 330px;">Tuyến chạy:</th>
		<th style="width: 200px;">Đơn giá :</th>
		<th style="width: 300px;">Số điện thoại liên hệ:</th>
		<th style="width: 300px;">Ngày chạy:</th>
		<th style="width: 300px;">Chọn</th>					
	</tr>
	<?php while($kq=mysqli_fetch_assoc($exvc)): ?>
		<tr>						
			<td><?php echo $kq['tuyen_chay'];  ?></td>
			<td><?php echo $kq['cuoc_phi_vc']." vnd";  ?></td>
			<td><?php echo $kq['sdt']; ?></td>
			<td><?php echo $kq['ngay_chay']; ?></td>
			<td><a href="?menu=ex_vcdh&ma_vc=<?php echo $kq['ma_vc']?>&madh=<?php echo $madh?>">Chọn </a></td>
		</tr>					
	<?php endwhile ?>					
</table>