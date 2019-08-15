<?php 
$dem1=mysqli_fetch_assoc(mysqli_query($connect,"select max(right(ma_loai,4))as dem from loaisanpham where left(ma_loai,1)='L'"));
		$dem2=(int)$dem1['dem'];
		$dem2++;
		if($dem2<10)
		{$MT='L000';
		$mala="$MT"."$dem2";
		}
		if($dem2>=10 and $dem2<=99)
		{$MT='L00';
		$mala="$MT"."$dem2";
		}
		if($dem2>=100 and $dem2<=999)
		{$MT='L0';
		$mala="$MT"."$dem2";
		}
		if($dem2>=1000 )
		{$MT='L';
		$mala="$MT"."$dem2";
		}

$ten_loai=$_POST['ten_loai'];
$ghi_chu=$_POST['ghi_chu'];
$qr="insert into loaisanpham values('".$mala."','".$ten_loai."','".$ghi_chu."')";
$ex= mysqli_query($connect, $qr);
	if ($ex) {
		thong_bao_html_roi_chuyen_trang("Thêm loại sản phẩm thành công","index.php?thamso=qlloai");
	}else{
		thong_bao_html("Thêm loại sản phẩm thất bại");
	trang_truoc();
	exit();
	}

 ?>