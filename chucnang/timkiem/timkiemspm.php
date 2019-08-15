<?php 
$qrpt= mysqli_query($connect,"select count(ma_bai_dang) as tong from sanphamgiaicuu where trang_thai='1'");
$row = mysqli_fetch_assoc($qrpt);
$tong_record = $row['tong'];

$trang= isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 2;

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


 ?>
<table class="table">
	<tr>
		<td><label>Kết quả tìm kiếm cho sản phẩm mới nhất là: </label></td>
	</tr>
<?php 
	// $search= $_GET['search'];
	// include('connect.php');
	$sl= "select * from sanphamgiaicuu where trang_thai='1' LIMIT $start, $limit";
	$exec=mysqli_query($connect, $sl);
	$num= mysqli_num_rows($exec);
	
		if($num==0){
			?>
		<tr>
			<td>Không tìm thấy kết quả cho từ khóa '<?php echo $_GET['search']; ?>'</td>
		</tr>
			<?php
		}	
		while($row= mysqli_fetch_array($exec)){
			$ngay_hh=strtotime($row['ngay_hh']);
			$ngay_dang=strtotime($row['ngay_dang']);
			$ngay_ht=strtotime(date('Y-m-d'));
			// $kq=($ngay_hh - $ngay_dang)/(24*60*60);
			$kq1=($ngay_ht - $ngay_dang)/(24*60*60);
			if ($ngay_ht<$ngay_hh && $kq1>=0&&$kq1<10) {
				
			
	?>
		<tr style="height: 300px;">
			<td>
			<div style="height:300px; padding-bottom: 15px;" class="sp img-thumbnail col-xs-12 col-sm-6 col-md-12 col-lg-12">
				<div style="width: 110px; height: 100%;" class="col-sm-6 col-md-6">
					<img style="width: 120px; height: 120px; margin-left:10px; margin-top: 50px; margin-bottom: 10px;" src="images/sanpham/<?php echo $row['hinh_anh']; ?>" alt="">
				</div>
				<div style="padding-top: 10px; margin-right: 20px; margin-left: 20px;" class="text-left col-sm-6 col-md-6">
					<div class="title col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a style="font-size: 18px;" href=""><?php echo $row['ten_sp']; ?></a><br>					
						<span>Đơn giá :<?php echo number_format($row['don_gia'],0,",",".")."đ"; ?></span><br>
						<span>Số lượng :<?php if ($row['so_luong']==0) {echo "Đã hết hàng";}else{echo $row['so_luong']." Kg";}; ?></span><br>
						<span>Ngày hết hạn :<?php echo $row['ngay_hh']; ?></span><br>
						<span>Địa chỉ:<?php echo $row['dia_chi']; ?></span><br>
						<span>Mô tả sản phẩm :<?php echo $row['mo_ta']." Kg"; ?></span><br>
					</div>
					
					<div class="buy col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 20px;">
						<a class="btn btn-primary" href="?menu=van_chuyen">Chọn hổ trợ vận chuyển</a>
						<a class="btn btn-success" href="?menu=muahang&ma_bai_dang=<?php echo $row['ma_bai_dang']?>">Mua hàng</a> 
					</div>
				</div>
			</div>
			</td>
		</tr>
		
	<?php }} ?>
	</table>
	<div class="text-center" >
	<ul class="pagination" >
		<?php  if ($trang > 1 && $tong_record > 1){?>
			<li><a href="index.php?menu=timkiemspm&page=<?php echo ($trang-1);?>">&laquo;</a></li><?php } ?>
			<li><?php for ($i = 1; $i < 2; $i++){
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
				if ($i == $trang){
					echo '<span>'.$i.'</span>  ';
				}
				else{
					echo '<a href="index.php?menu=timkiemspm&page='.$i.'">'.$i.'</a> ';
				}
			} ?></li>
			<?php if ($trang < $tong_record && $tong_record > 1){ ?>
				<li><a href="index.php?menu=timkiemspm&page=<?php echo ($trang+1);?>">&raquo;</a></li><?php } ?>
			</ul>
		</div>