<?php 
$ma_bai_dang= $_GET['id'];
	 $qr= "select * from sanphamgiaicuu INNER JOIN nguoidung on sanphamgiaicuu.ma_nd= nguoidung.ma_nd where ma_bai_dang='".$ma_bai_dang."'";
// $qr= "select * from phuongtienvanchuyen INNER JOIN donvivanchuyen on phuongtienvanchuyen.ma_vc=donvivanchuyen.ma_vc INNER JOIN sanphamgiaicuu on phuongtienvanchuyen.ma_bai_dang= sanphamgiaicuu.ma_bai_dang where sanphamgiaicuu.ma_bai_dang='".$ma_bai_dang."'";
	 // $qr1="select * from phuongtienvanchuyen where ma_bai_dang='".$ma_bai_dang."'";//select tất cả của bảng phương tiện vận chuyển
	 // $ex1= mysqli_query($connect,$qr1);
	 // if (!isset($ex1)) {
	 // 	$ten_chu_xe="";
	 // 	$ten_lai_xe="";
	 // 	$loai_xe="";
	 // 	$tuyen_chay="";
	 // 	$trong_tai="";
	 // 	$don_gia="";
	 // 	$ngay_chay="";
	 // 	$gio_chay="";
	 // }else{
	 // 	while ($row1=mysqli_fetch_assoc($ex1)) {
	 		
	 // 	}
	 // }
$ex= mysqli_query($connect,$qr);
while ($row= mysqli_fetch_assoc($ex)):
	if (isset($row)) {
		$link_anh="images/sanpham/".$row['hinh_anh'];
		
	} ?>
	<div class="content" style="height: auto; margin-top: 10px;">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="col-lg-3 col-md-3 col-sm-3">
				<img src="<?php echo $link_anh;?>" alt="anh" style="width: 95%; height: 180px; margin-top: 100px;">		
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9">
				<h2 class="text-center text-success">Thông tin chi tiết của sản phẩm</h2>
				<table class="table bg-success">
					<tr>
						<td>Người đăng bán</td>
						<td><a href="?menu=nguoidung&id=<?php echo$row['ma_nd'] ?>"><?php echo $row['ten_nd']; ?></a></td>
					</tr>
					<tr>
						<td>Tên sản phẩm</td>
						<td><?php echo $row['ten_sp']; ?></td>
					</tr>
					<tr>
						<td>Số lượng:</td>
						<td><?php echo $row['so_luong']." Kg"; ?></td>
					</tr>
					<tr>
						<td>Đơn giá</td>
						<td><?php echo $row['don_gia']." VNĐ"; ?></td>
					</tr>
					<tr>
						<td>Địa chỉ:</td>
						<td><?php echo $row['dia_chi']; ?></td>
					</tr>
					<tr>
						<td>Ngày đăng bán:</td>
						<td><?php echo date('d-m-Y',strtotime($row['ngay_dang'])); ?></td>
					</tr>
					<tr>
						<td>Ngày hết hạn:</td>
						<td><?php echo date('d-m-Y',strtotime($row['ngay_hh'])); ?></td>
					</tr>
					<tr>
						<td>Mô tả chi tiết:</td>
						<td><?php echo $row['mo_ta']; ?></td>
					</tr>
					<tr>
						<td><a href="index.php" class="btn btn-info">Quay lại</a></td>
						<td><a href="?menu=muahang" class="btn btn-primary">Mua hàng</a></td>
					</tr>
				</table>

			</div>
			
		</div>
		
	</div>
	<?php endwhile ?>

	<!-- <?php 
		$qr1="select * from phuongtienvanchuyen INNER JOIN donvivanchuyen on phuongtienvanchuyen.ma_vc=donvivanchuyen.ma_vc where ma_bai_dang='".$ma_bai_dang."'";
		$ex1= mysqli_query($connect,$qr1);
		while ($row1=mysqli_fetch_assoc($ex1)):
			
		if (!isset($row1)) {
		$ten_chu_xe="";
	 	$ten_lai_xe="";
	 	$loai_xe="";
	 	$tuyen_chay="";
	 	$trong_tai="";
	 	$cuoc_phi_vc="";
	 	$ngay_chay="";
	 	$gio_chay="";
		}else{
		$ten_chu_xe=$row1['ten_chu_xe'];
	 	$ten_lai_xe=$row1['ten_lai_xe'];
	 	$loai_xe=$row1['loai_xe'];
	 	$tuyen_chay=$row1['tuyen_chay'];
	 	$trong_tai=$row1['trong_tai']." tấn";
	 	$cuoc_phi_vc=$row1['cuoc_phi_vc'];
	 	$ngay_chay=date('d-m-Y',strtotime($row1['ngay_chay']));
	 	$gio_chay=$row1['gio_chay'];	
		}
	 ?> -->
	<!-- <div class="content">
		<div class="col-lg-10 col-md-10 col-sm-10">
				<h2 class="text-center text-info">Thông tin vận chuyển của sản phẩm</h2>
				<table class="table bg-info">
					<tr>
						<td>Chủ xe vận chuyển:</td>
						<td><?php echo $ten_chu_xe ?></td>
					</tr>
					<tr>
						<td>Người lái xe:</td>
						<td><?php echo $ten_lai_xe ?></td>
					</tr>
					<tr>
						<td>Loại xe:</td>
						<td><?php echo $loai_xe ?></td>
					</tr>
					<tr>
						<td>Tuyến chạy:</td>
						<td><?php echo $tuyen_chay ?></td>
					</tr>
					<tr>
						<td>Trọng tải xe:</td>
						<td><?php echo $trong_tai ?></td>
					</tr>
					<tr>
						<td>Giá vận chuyển:</td>
						<td><?php echo $cuoc_phi_vc ?></td>
					</tr>
					<tr>
						<td>Ngày chạy</td>
						<td><?php echo $ngay_chay ?></td>
					</tr>
					<tr>
						<td>Giờ chạy</td>
						<td><?php echo $gio_chay ?></td>
					</tr>
				</table>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
			<input type="submit" class="btn btn-info" name="" value="mua" style="margin-left: 400px;">
			
		</div> -->

	</div>
	<!-- <?php endwhile ?> -->
	
			