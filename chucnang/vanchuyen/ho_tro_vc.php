<?php 
$ma_bd=$_GET['ma_bd'];
$qr= "select * from donvivanchuyen where ma_nd='".$_SESSION['ma_nd']."'";
$ex = mysqli_query($connect,$qr);
?>

	<table class="table bg-info" style="width: 1100px;">
		<details>
			<summary>Lựa chọn phương tiện </summary>				
		</details>
		<thead>
			<tr>
				<th>Tên chủ xe</th>
				<th>Tên lái xe</th>
				<th>Số điện thoại</th>
				<th>Loại xe</th>
				<th>Tuyến chạy</th>
				<th>Đơn giá</th>
				<th>Trọng tải</th>				
				<th class="text-center">Chọn</th>
			</tr>
			<?php while ($row= mysqli_fetch_assoc($ex)): ?>
			<tr >
					<td><?php echo $row['ten_chu_xe']; ?></td>
					<td><?php echo $row['ten_lai_xe']; ?></td>
					<td><?php echo $row['sdt']; ?></td>
					<td><?php echo $row['loai_xe']; ?></td>
					<td><?php echo $row['tuyen_chay']; ?></td>
					<td><?php echo $row['cuoc_phi_vc']; ?></td>
					<td><?php echo $row['trong_tai']; ?></td>
					
					<!-- <td>
						<input type="checkbox" name="check" required style="width: 30px; height: 30px; margin: 10px auto">
					</td> -->
					<td >
					<a href="?menu=ex_ht_vc&ma_vc=<?php echo $row['ma_vc']?>&ma_bd=<?php echo $ma_bd?>" name="chon" class="btn btn-info" onclick="return confirm('Bạn có chắc chắn chọn mục này?');" >Chọn hổ trợ</a>
				</td>				
			</tr>
			<?php endwhile ?>
			<tr>
				

			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
