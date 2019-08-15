<?php 
////////////////////////////select trang thái nếu = 1 thì đỏ ra trang chủ 
///////////////////////////////phân trang 
// session_start();
$qrpt= mysqli_query($connect,"select count(ma_bai_dang) as tong from sanphamgiaicuu where trang_thai='1'");
$row = mysqli_fetch_assoc($qrpt);
$tong_record = $row['tong'];

$trang= isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 1;

// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$tong_record = ceil($tong_record / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($trang > $tong_record){
	$trang = $tong_record;
}
else if ($trang < 1){
	$trang = 1;
}

// Tìm Start
$start = ($trang - 1) * $limit;

// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
// $result = mysqli_query($connect, "SELECT * FROM sanphamgiaicuu ");
///////////////////////////////

$tv="select * from sanphamgiaicuu where trang_thai='1' LIMIT $start, $limit";
$tv_1 = mysqli_query($connect,$tv);
echo "<table style='text-align:center;'>";
while ($tv_2= mysqli_fetch_array($tv_1)) {
	echo "<tr>";
	echo "<td width='80%' valign='top'>";
	if($tv_2!= false){
		// $_SESSION['ma_bai_dang']=$tv_2['ma_bai_dang'];
		$id=$tv_2['ma_bai_dang'];
		$link_anh="images/sanpham/".$tv_2['hinh_anh'];
		$link_chi_tiet="?menu=chi_tiet_san_pham&id=".$tv_2['ma_bai_dang'];
		// $_SESSION['mabd']=$tv_2['ma_bai_dang'];
		$ma_nd=$tv_2['ma_nd'];
		$ten=$tv_2['ten_sp'];
		$gia=$tv_2['don_gia'];
		// if ($tv_2['ma_loai']=='L0005') {
		// 	$so_luong=$tv_2['so_luong']." con";
		// }else{
		// 	$so_luong=$tv_2['so_luong']." kg";
		// }
		if ($tv_2['so_luong']==0) {
			$so_luong="Đã hết hàng";
		}else{
			$so_luong=$tv_2['so_luong']." kg";
		}
		
		$gia=number_format($gia,0,",",".")." VNĐ";
		$ngay_hh=date('d-m-Y',strtotime($tv_2['ngay_hh']));
		$mota=$tv_2['mo_ta'];
		$diachi=$tv_2['dia_chi'];
		?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<table class="table bg-info"  style="height: 300px;width: 870px;" >
			<!-- <tr style="height: 300px">
				<td style="width: 90% " >
					<div style="width: 40%; float: left;">
						<a href="<?php echo $link_chi_tiet ?>">
							<img width="95%" height="180px"src="<?php echo $link_anh?>" alt="" >
						</a>
					</div>
					<div style="width: 55%; float: left;margin-left: 20px;text-align: left;">
						Tên sản phẩm:
						<a href="<?php echo $link_chi_tiet ?>">
							<?php echo $ten; ?>
						</a><br>
						Giá tiền:<?php echo$gia; ?><br>
						Số lượng:<?php echo $so_luong ;?> <br><?php echo $mota; ?>

					</div><br><br>
					<?php  
					if(isset($_SESSION['username'])){
						?>
						<a href="?menu=ht_van_chuyen&ma_bd=<?php echo $tv_2['ma_bai_dang']?>" class="btn btn-info">Hổ trợ vận chuyển</a>
						<a href="?menu=mua_hang" class="btn btn-info">Mua hàng</a>
					<?php }
					else{ ?>
						<a href="" class="btn btn-info disabled">Hổ trợ vận chuyển</a>
						<a href="" class="btn btn-info disabled">Mua hàng</a>
					<?php } ;?>

				</td> -->
				<!-- </tr> -->
				<tr>
					<td style="width: 200px;">
						<h2 class="text-success">Hình ảnh:</h2>
						<!-- <a href="<?php echo $link_chi_tiet;?>"><img style="width: 300px; height: 220px;" src="<?php echo $link_anh?>" alt=""></a> -->
						<a href="<?php echo $link_chi_tiet?>"><img style="width: 300px; height: 220px;" src="<?php echo $link_anh?>" alt=""></a>
					</td>
					<td><h3 class="text-info">Thông tin sản phẩm</h3>
						<table class="table table-bordered bg-danger text-left text-danger">
							<tr>
								<td class="text-center" colspan="2"><a href="?menu=nguoidung&id=<?php echo $ma_nd?>">Người đăng bài</a></td>

							</tr>
							<tr>
								<td style="width: 200px;">Tên sản phẩm:</td>
								<td><?php echo $ten ?></td>
							</tr>
							<tr>
								<td>Số lượng:</td>
								<td><?php echo $so_luong; ?></td>
							</tr>
							<tr>
								<td>Giá bán:</td>
								<td><?php echo $gia; ?></td>
							</tr>	
							<tr>
								<td>Ngày hết hạn giải cứu:</td>
								<td><?php echo $ngay_hh; ?></td>
							</tr>
							<tr>
								<td>Địa chỉ:</td>
								<td><?php echo $diachi; ?></td>
							</tr>

							<tr>
								<td>Mô tả:</td>
								<td><?php echo $mota; ?></td>
							</tr>


						</table>
					</td>				
				</tr>
			</table>
<?php 
	$qrvc="select * from donvivanchuyen INNER JOIN phuongtienvanchuyen on donvivanchuyen.ma_vc= phuongtienvanchuyen.ma_vc where phuongtienvanchuyen.ma_bai_dang='".$tv_2['ma_bai_dang']."'";
	$exvc=mysqli_query($connect,$qrvc);


 ?>
		<div style="height: 300px; overflow-y: scroll;">
			<table class="table table-bordered table-hover bg-success" style="width: 870px;">
				<h3 class="text-warning">Thông tin vận chuyển</h3>
				<tr class="bg-primary">
					<th>Họ tên chủ xe:</th>
					<th>Tuyến chạy:</th>
					<th>Đơn giá :</th>
					<th>Số điện thoại liên hệ:</th>
					
				</tr>
				<?php while($kq=mysqli_fetch_assoc($exvc)): ?>
					<tr>
						<td><?php echo $kq['ten_chu_xe'];  ?></td>
						<td><?php echo $kq['tuyen_chay'];  ?></td>
						<td><?php echo number_format($kq['cuoc_phi_vc'],0,",",".")." đ";  ?></td>
						<td><?php echo "0".$kq['sdt']; ?></td>
					</tr>					
				<?php endwhile ?>
				<tr>
					<td colspan="4">
						<a href="?menu=van_chuyen&id=<?php echo $id?>" class="btn btn-info">Chọn hổ trợ</a>
						<a href="?menu=muahang&id=<?php echo $id?>" class="btn btn-success <?php if($tv_2['so_luong']==0) echo disabled?>">Mua hàng</a>
					</td>
				</tr>
			</table></div>
		</div>
		<?php
		
	}
	else 
	{
		echo "&nbsp;";
	}
	echo "</td>";
	echo "</tr>";
}

echo "</table>";




?>

<div class="text-center" >
	<ul class="pagination" >
		<?php  if ($trang > 1 && $tong_record > 1){?>
			<li><a href="index.php?page=<?php echo $trang-1; ?>">&laquo;</a></li><?php } ?>
			<li><?php for ($i = 1; $i <= 5; $i++){
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
				if ($i == $trang){
					echo '<span>'.$i.'</span>  ';
				}
				else{
					echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
				}
			} ?></li>
			<?php if ($trang < $tong_record && $tong_record > 1){ ?>
				<li><a href="index.php?page=<?php echo $trang+1; ?>">&raquo;</a></li><?php } ?>
			</ul>
		</div>
