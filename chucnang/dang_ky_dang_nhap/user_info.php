
<?php
	include('connect.php');
	$sl= "select * from nguoidung where ten_dn='".$_SESSION['username']."'";
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<div class="panel panel-title" style="width: 100%;">
<!-- <div class="panel-primary">Thành viên</div> -->
<table class="table table-responsive">
	<tr>
		<td rowspan="3" width="180px"><p style="padding-left: 2px;font-weight: bold;">KH: <a href="?menu=thongtinnd" style=""><?php echo $row['ten_nd']; ?></a></p></td>
		<td >
			<tr>
				<td><p style="text-align: left;font-weight: bold;"><a class="btn btn-info" href="?menu=doimk">Đổi mật khẩu</a></p></td>
				
			</tr>
			<tr>
				<td><p style="text-align: left;"><a class="btn btn-info" href="?menu=logout">Đăng xuất</a></p></td>
			</tr>
		</td>
		
		<!-- <td><p style="padding-left: 2px;font-weight: bold;">Giỏ hàng: <a href="?menu=gio_hang"><?php echo $cart; ?></a> SP</p></td> -->
		
	</tr>
	
</table>
</div>
