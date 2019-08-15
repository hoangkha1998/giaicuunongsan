<?php 
	// $l= $_POST['loai_sp'];
	// echo $l;
	// echo "string";
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST['dang'])) {
	$ten_loai= $_POST['loai_sp'];
	$hinh_anh= $_FILES['hinh_anh']['name'];
	$ten_sp= $_POST['ten_sp'];
	$so_luong= $_POST['so_luong'];
	$don_gia= $_POST['don_gia'];
	$dia_chi= $_POST['dia_chi'];
	$ngay_hh=$_POST['ngay_hh'];
	$mo_ta= $_POST['mo_ta'];
	////////////////////////upload ảnh
	// $duong_dan ="../../images/sanpham/";//đường dẫn tới thư mục lưu file
	// $noi_luu= $duong_dan.basename($_FILES['hinh_anh']['name']);// nơi lưu file
	// if ($_FILES['hinh_anh']['error'] > 0) {
	// 	echo "upload lỗi";
	// }else{
	// 	move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$noi_luu);
	// }

	
	
	//////////////////////////lay ma loai
	$qrmal="select ma_loai from loaisanpham where ten_loai='".$ten_loai."'";
	$kqml = mysqli_query($connect,$qrmal);
	$kqml1 = mysqli_fetch_assoc($kqml);
	$ma_loai = $kqml1['ma_loai'];
	////////////////////////Tạo mã bài đăng tự động
	$dem1=mysqli_fetch_assoc(mysqli_query($connect,"select max(right(ma_bai_dang,4)) as dem from sanphamgiaicuu"));
	$dem2=(int)$dem1['dem'];
	$dem2++;
	if($dem2<10)
		{$MT='BD000';
	$ma_bai_dang="$MT"."$dem2";
}
if($dem2>=10 and $dem2<=99)
	{$MT='BD00';
$ma_bai_dang="$MT"."$dem2";
}
if($dem2>=100 and $dem2<999 )
	{$MT='BD0';
$ma_bai_dang="$MT"."$dem2";
}
if($dem2>=1000 )
	{$MT='BD';
$ma_bai_dang="$MT"."$dem2";
}
	//////////////////////// tạo mã người dùng
$nd= "select ma_nd from nguoidung where ten_dn='".$_SESSION['username']."'";
$tv_nd= mysqli_query($connect,$nd);
$kq_nd= mysqli_fetch_array($tv_nd);
$ma_nd =$kq_nd['ma_nd'];
$_SESSION['ma_nd']=$ma_nd;
// echo $ma_nd;
	////////////////////ngay dang ///////////////////////
$ngay_dang=date('Y-m-d');		
$ngay_hh=date('Y-m-d', strtotime($ngay_hh));
// echo $ngay_dang;
// echo$ngay_hh;
	///////////////////////////chèn dữ liệu
$tv_insert = "INSERT INTO sanphamgiaicuu(ma_bai_dang,ma_loai,ma_nd,ten_sp,hinh_anh,so_luong,don_gia,dia_chi,ngay_dang,ngay_hh,mo_ta,trang_thai) VALUES (
'$ma_bai_dang',
'$ma_loai',
'$ma_nd',
'$ten_sp',
'$hinh_anh',
'$so_luong',
'$don_gia',
'$dia_chi',
'$ngay_dang',
'$ngay_hh',
'$mo_ta',
'0');";	
$kq_insert= mysqli_query($connect,$tv_insert);
if (isset($kq_insert)) {
	// echo "string";
	$tmp_name=$_FILES['hinh_anh']['tmp_name'];
//lay duong dan hien tai
	$path= getcwd().DIRECTORY_SEPARATOR.'images/sanpham';
	$name= $path.DIRECTORY_SEPARATOR.$_FILES['hinh_anh']['name'];
	move_uploaded_file($tmp_name,$name);
		 thong_bao_html_roi_chuyen_trang("Đăng bài thành công","index.php");			
}else{
	thong_bao_html("Đăng bài thất bại");
	trang_truoc();
	exit();
}
}

?>