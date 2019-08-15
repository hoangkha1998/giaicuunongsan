<?php
	include('connect.php');
	$mkc= $_POST['old_password'];
	$sql= "select * from nguoidung where mat_khau='".$mkc."' and ten_dn='".$_SESSION['username']."'";
	$qr= mysqli_query($connect, $sql);
	$num= mysqli_num_rows($qr);
	if($num>0){
	$mkm= $_POST['new_password'];	
	$re_password= $_POST['re_password'];
	
	if($mkm==$re_password){
	$sl="update nguoidung set mat_khau='".$mkm."' where ten_dn='".$_SESSION['username']."'";
	$exec= mysqli_query($connect, $sl);
	if(isset($exec)){
		?>
	<p class="alert alert-success">Đổi mật khẩu thành công.<br>Bấm <a href="index.php">vào đây</a> để quay lại.</p>
		<?php
	}
	else{
		?>
	<p class="alert alert-danger">Đổi mật khẩu thất bại.<br>Bấm <a href="javascript: history.back(-1);">vào đây</a> để quay lại.</p>
		<?php
	}
	}else{
		echo "<script> alert('Mật khẩu bạn nhập lại không đúng');</script>";
		echo "<script> location.href='javascript: history.back(-1);'; </script>";	
	}
}else{
	echo "<script> alert('Mật khẩu củ không đúng');</script>";
	echo "<script> location.href='javascript: history.back(-1);'; </script>";	
}
	
?>