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
					<!-- <tr>
						<td>Cước phí vận chuyển</td>
						<td><?php echo $row['cuoc_phi_vc']." VNĐ"?></td>
						<td>Thành tiền</td>
						<td><?php echo $thanh_tien=$row['cuoc_phi_vc']+$cart_itm["gia"]*$cart_itm["sl"] ." VNĐ";
							$_SESSION['phivc']= (int)$row['cuoc_phi_vc'];

						 ?></td>
					</tr> -->
					<tr>
						<td colspan="4" align="center">
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