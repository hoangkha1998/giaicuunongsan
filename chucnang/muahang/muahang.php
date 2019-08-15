<?php 
if (isset($_SESSION['username'])) {
	if (isset($_GET['id'])) {
	$mabd=$_GET['id'];
}else{
	$mabd=$_GET['ma_bai_dang'];
}

$qr1 ="select * from sanphamgiaicuu INNER JOIN phuongtienvanchuyen on sanphamgiaicuu.ma_bai_dang= phuongtienvanchuyen.ma_bai_dang INNER JOIN donvivanchuyen on phuongtienvanchuyen.ma_vc=donvivanchuyen.ma_vc where sanphamgiaicuu.ma_bai_dang='".$mabd."'";
$ex1= mysqli_query($connect,$qr1);
$row=mysqli_fetch_assoc($ex1);
$link_anh="images/sanpham/".$row['hinh_anh'];
$_SESSION['ma_bai_dang']=$mabd;
?>
<div style=" margin: 0 auto;">
	<h2 class="text-center text-danger">Thông tin mua hàng</h2>
	<form action="?menu=gio_hang" method="POST" style="height: 300px;">
		<!-- <input type="hidden" name="ma_bd" value="<?php echo $mabd?>"> -->
		<table class="table table-bordered bg-info">
			<tr>
				<th><label for="">Tên sản phẩm:</label></th>
				<th><label for="">Hình ảnh :</label></th>
				<th><label for="">Số lượng :</label></th>
				<th><label for="">Đơn giá:</label></th>
			</tr>
			<tr>
				<td><?php echo $row['ten_sp']; ?></td>
				<td><img src="<?php echo $link_anh?>" alt="" style="width: 150px; height: 100px;"></td>
				<td><?php if ($row['so_luong']==0) {
					echo "Đã hết hàng";
				} else {echo $row['so_luong']." kg";} ?></td>
				<td><?php echo $row['don_gia']. " VNĐ"; ?></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="number" name="sl"  value="1" class="pull-right" style="width: 100px;">
				</td>
				<td colspan="2">
					<input type='hidden' name='menu' value='gio_hang' >
					<input type='hidden' name='type' value='add' >
					<input type="submit" value="Thêm vào giỏ" class="btn btn-info" onclick="return confirm('Bạn muốn thêm vào giỏ?');">
				</td>
			</tr>
		</table> 		
	</form>
	<h2 class="text-center text-success">Giỏ hàng</h2>
	<form action="?menu=dathang" method="POST">
		<table class="table table-bordered bg-success">
			
			<?php 
			if(isset($_SESSION["products"]))
			{
				$tongtien = 0;

				foreach ($_SESSION["products"] as $cart_itm):?>
					<tr>
						<th>Tên</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Tổng tiền</th>
					</tr>

					<tr>
						<td><?php echo $cart_itm["ten"] ?></td>
						<td><?php echo $cart_itm["gia"]." VNĐ" ?></td>
						<td><?php echo $cart_itm["sl"]." Kg" ?></td>
						<td><?php echo $tongtien = ($cart_itm["gia"]*$cart_itm["sl"]." VNĐ"); ?></td>
					</tr>
					<tr>
						<td>Cước phí vận chuyển</td>
						<td><?php echo $row['cuoc_phi_vc']." VNĐ"?></td>
						<td>Thành tiền</td>
						<td><?php echo $thanh_tien=$row['cuoc_phi_vc']+$cart_itm["gia"]*$cart_itm["sl"] ." VNĐ";
							$_SESSION['phivc']= (int)$row['cuoc_phi_vc'];

						 ?></td>
					</tr>
					<tr>
						<td colspan="4" align="center">
						<!-- 	<input type="hidden" name="menu" value="dathang">
							<input type="submit" name="#" value="Đặt hàng" class="btn btn-info" onclick="return confirm('Bạn chắc chắn muốn đặt hàng?')">
							<input type="submit" name="#" value="Xóa giỏ hàng" class="btn btn-info" onclick="return confirm('Bạn chắc chắn muốn đặt hàng?')"> -->
							<a class="btn btn-info" name="menu" href="?menu=dathang" onclick="return confirm('Bạn chắc chắn muốn đặt hàng?')">Đặt hàng</a>
							<a class="btn btn-danger" name="menu" href="?menu=xoagiohang" onclick="return confirm('Bạn chắc chắn muốn xóa giỏ hàng?')">Xóa giỏ hàng</a>
						</td>
						
					</tr>


				<?php endforeach;
			}else{
				echo "<span class='alert-danger'>Giỏ hàng trống</span>";
			}
			?>
			

		</table>
	</form>
</div>
<?php 
}else{
	thong_bao_html_roi_chuyen_trang("Bạn chưa đăng nhập vui lòng đăng nhập để tiếp tục","index.php?menu=dang_nhap");
}
?>
