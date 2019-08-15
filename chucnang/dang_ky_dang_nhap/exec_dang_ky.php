<?php
	if(isset($_POST['submit'])){
	// include('ket_noi.php');	
	$sql= "select ten_dn from nguoidung";
	$execc= mysqli_query($connect, $sql);
	//if($execc){
	while($row2= mysqli_fetch_assoc($execc)){
		if($row2['ten_dn']==$_POST['username']){
			$kt=1;
		}else{
			$kt=0;
		}
	}
	if($kt==0){	
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$repass= $_POST['re-pass'];	
	if($password==$repass){
		$dem1=mysqli_fetch_assoc(mysqli_query($connect,"select max(right(ma_nd,4)) as dem from nguoidung where left(ma_nd,2)='ND'"));
		$dem2=(int)$dem1['dem'];
		$dem2++;
		if($dem2<10)
		{$MT='ND000';
		$add="$MT"."$dem2";
		}
		if($dem2>=10 and $dem2<=99)
		{$MT='ND00';
		$add="$MT"."$dem2";
		}
		if($dem2>=100 and $dem2<=999)
		{$MT='ND0';
		$add="$MT"."$dem2";
		}
		if($dem2>=1000 )
		{$MT='ND';
		$add="$MT"."$dem2";
		}
	$hoten = $_POST['hoten'];	
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];	
	$sl="insert into nguoidung values('".$add."','".$hoten."','".$diachi."','".$sdt."','".$username."',".$password.",'1','1','1')";
	$exec= mysqli_query($connect,$sl);
	if($exec){
	?>
		<p class="alert alert-success">Đăng ký thành công.. Chúng tôi đã gửi bạn email thông tin tài khoản của bạn..<br> Bấm<a href="?menu=dang_nhap"> vào đây </a> để đăng nhập và mua hàng</p>
	<?php 
	}
	else{
		echo "Đăng ký thất bại <br>";
		echo 'Bấm<a href="javascript:history.back(-1);"> vào đây </a> để quay lại trang đăng ký';
	}}
	else{
		echo "<script> alert('Mật khẩu bạn nhập lại chưa chính xác'); location.href='?menu=dang_ky'; </script>";
	}
}else{
	echo "<script> alert('Tên đăng nhập đã có người sử dụng.'); location.href='?menu=dang_ky'; </script>";
}

}
else{
	if(isset($_POST['cancel'])){
	echo "<script> location.href='index.php'; </script>";
}
}
?>