<?php
if(isset($_POST['dat'])){
	
 
if(!isset($_SESSION['username'])){
	thong_bao_html_roi_chuyen_trang("Bạn chưa đăng nhập","index.php?menu=dang_nhap");
}else{
		//code dat hang sau khi da login
		//tao ma don hang
	$dem1=mysqli_fetch_assoc(mysqli_query($connect,"select max(right(ma_dh,4)) as dem from donhang "));
	$dem2=(int)$dem1['dem'];
	$dem2++;
	if($dem2<10)
		{$MT='DH000';
	$ma_dh="$MT"."$dem2";
}
if($dem2>=10 and $dem2<=99)
	{$MT='DH00';
$ma_dh="$MT"."$dem2";
}
if($dem2>=100 and $dem2<999 )
	{$MT='DH0';
$ma_dh="$MT"."$dem2";
}
if($dem2>=1000 )
	{$MT='DH';
$ma_dh="$MT"."$dem2";
}
//$_SESSION['ma_dhvc']=$ma_dh;
// get ma bai dang
$ma_bd=$_SESSION['ma_bai_dang'];
// tao ma nguoi dung
$qr1="select * from nguoidung where ten_dn ='".$_SESSION['username']."'";
$ex1= mysqli_fetch_array(mysqli_query($connect,$qr1));
$ma_nd =$ex1['ma_nd'];
// get ten so luong don gia
foreach ($_SESSION["products"] as $cart_itm){
	$ten_sp= $cart_itm['ten'];
	$sl= $cart_itm['sl'];
	$tongtien = ($cart_itm["gia"]*$sl);

}
$phi_vc= $_SESSION['phivc'];
///get ten noi nhan hang va ngay dat hang
$ten_nn= filter_input(INPUT_POST, 'ten_nn');
$diac_nn= filter_input(INPUT_POST, 'diac_nn');
$ngay_nhan= filter_input(INPUT_POST, 'ngay_nhan');
$ngay_dat=date('Y-m-d');	
// insert du lieu
$qr_insert="insert into donhang(ma_dh, ma_bai_dang, ma_nd, ten_sp, so_luong_dat, tong_tien,phi_vc, ho_ten, dia_chi_gh, ngay_dat, ngay_giao, trang_thai) values('$ma_dh','$ma_bd','$ma_nd','$ten_sp','$sl','$tongtien','$phi_vc','$ten_nn','$diac_nn','$ngay_dat','$ngay_nhan',0)";
$kq_insert= mysqli_query($connect,$qr_insert);
if (isset($kq_insert)) {
	$qr_update="update sanphamgiaicuu set so_luong= so_luong-'".$sl."' where ma_bai_dang='".$ma_bd."'";
	$ex_update=mysqli_query($connect,$qr_update);
	unset($_SESSION["products"]);
	unset($_SESSION['phivc']);
	unset($_SESSION['ma_bai_dang']);
	thong_bao_html_roi_chuyen_trang("Đặt hàng thành công , Mời bạn tiếp tục :","index.php?menu=xem_dh");
	
	
}else{
	thong_bao_html("Đặt hàng thất bại");
	trang_truoc();
	exit();
}

/////////////////////
// echo $ma_dh;
// echo $ma_bd;
// echo $ma_nd;
// echo $ten_sp;
// echo $sl;
// echo $tongtien;
// echo $ten_nn;
// echo $diac_nn;
// echo $ngay_nhan;




}//ngoac else
}// ngoac if POST
?>
