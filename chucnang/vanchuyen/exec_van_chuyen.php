<?php 
if(isset($_POST['submit'])){
	if(isset($_SESSION['username'])){

	// $loai_xe=filter_input(INPUT_POST, 'nhaxe');
	$tuyenchay=filter_input(INPUT_POST, 'tuyenchay');
	// $giochay=filter_input(INPUT_POST, 'giochay');
	// $ngaychay=filter_input(INPUT_POST, 'ngaychay');
	$gia=filter_input(INPUT_POST, 'gia');
	$sdt=filter_input(INPUT_POST, 'sdt');
	// $ma_bai_dang=$_SESSION['mabd'];
	$ma_bai_dang=$_POST['mabd'];
	// $taixe=filter_input(INPUT_POST, 'taixe');
	// $ma_bai_dang= $_GET['id'];

		// ///////////////////////////////
	$nd= "select ma_nd,ten_nd from nguoidung where ten_dn='".$_SESSION['username']."'";
	$tv_nd= mysqli_query($connect,$nd);
	$kq_nd= mysqli_fetch_array($tv_nd);
	$ten_chu_xe= $kq_nd['ten_nd'];
	$ma_nd =$kq_nd['ma_nd'];
		//////////////////tao ma vc /////////////////
	$dem1=mysqli_fetch_assoc(mysqli_query($connect,"select max(right(ma_vc,4)) as dem from donvivanchuyen  "));
	$dem2=(int)$dem1['dem'];
	$dem2++;
	if($dem2<10)
		{$MT='VC000';
	$ma_vc="$MT"."$dem2";
}
if($dem2>=10 and $dem2<=99)
	{$MT='VC00';
$ma_vc="$MT"."$dem2";
}
if($dem2>=100 and $dem2<999 )
	{$MT='VC0';
$ma_vc="$MT"."$dem2";
}
if($dem2>=1000 )
	{$MT='VC';
$ma_vc="$MT"."$dem2";
}	
		////////////////////////////////////////////////////////////
$tv_insert = "INSERT INTO donvivanchuyen(ma_vc,ma_nd,ten_chu_xe,sdt,tuyen_chay,cuoc_phi_vc) VALUES ('$ma_vc','$ma_nd','$ten_chu_xe','$sdt','$tuyenchay','$gia')";	
$kq_insert= mysqli_query($connect,$tv_insert);
$tv1_insert="insert into phuongtienvanchuyen(ma_vc,ma_bai_dang,ngay_chay,gio_chay,cuoc_phi,ghi_chu) values('$ma_vc','$ma_bai_dang','','','','')";
	$kq1_insert= mysqli_query($connect,$tv1_insert);
if (isset($kq_insert)) {
	// echo $_SESSION['username'];
	
	if(isset($tv1_insert)){
		thong_bao_html_roi_chuyen_trang("Hổ trợ vận chuyển thành công","index.php");		
	}
				
}else{
	thong_bao_html("Hổ trợ vận chuyển thất bại");
	trang_truoc();
	exit();
}		
	}else{

		thong_bao_html_roi_chuyen_trang("Bạn chưa đăng nhập","index.php?menu=dang_nhap");
	}



}



?>