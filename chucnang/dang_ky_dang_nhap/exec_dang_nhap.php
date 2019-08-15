<?php 

if(isset($_POST['submit'])){
		// include('connect.php');
	$pass= $_POST['password'];		
	$sl="select * from nguoidung where ten_dn='".$_POST['username']."' and mat_khau='".$pass."'";
	$exec= mysqli_query($connect,$sl);
	$kt = mysqli_num_rows($exec);
	$kt1 = mysqli_fetch_assoc($exec);
	$quyen=$kt1['loai_nd'];
		$loai=$kt1['trang_thai_nd'];
	if($kt>0){
		$_SESSION['ma_nd']=$kt1['ma_nd'];
			
		if ($loai ==1) {
				// echo $_SESSION['ma_nd'];
				if ($quyen==2) {//nếu quyền quản trị = 2 thì là admin
					$_SESSION['username']= $_POST['username'];
					$_SESSION['mat_khau']= $_POST['password'];
					$a= $_SESSION['username'];
					echo "<script> alert('Đăng nhập thành công. Xin chào admin');</script>";
					//echo "<script> location.href='index.php'; </script>";
					echo "<script> location.href='quantri/index.php'; </script>";
					// echo "<script> location.href='admin/pages/index.php?thamso=$a'; </script>";
					
					
				}else if($quyen==1){
					$_SESSION['username']= $_POST['username'];
					echo "<script> alert('Đăng nhập thành công');</script>";
					//echo "<script> location.href='index.php'; </script>";
					echo "<script> location.href='index.php'; </script>";
					
				}
				else{
					echo "<script> alert('Đăng nhập thất bại'); location.href='?menu=dang_nhap'; </script>";
				}
			}elseif($loai ==0){
				echo "<script> alert('Tài khoản của bạn đã bị khóa .Không thể đăng nhập');</script>";
				echo "<script> location.href='index.php'; </script>";
			}	
			
			}
		}
// 	if(isset($_POST['cancel'])){
// 	echo "<script> location.href='javascript: history.back(-1);'; </script>";
// }
		?>