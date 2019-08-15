<?php 
if(isset($_GET['thamso'])){
	$thamso= $_GET['thamso'];
	// $menu=$_POST['menu'];
	switch($thamso){ 
		case 'admin':
		include('quan_tri/quanlibaidang/baidang.php');
		break;
		case 'logout': include('quan_tri/logout.php'); break;
		case 'ql_baidang':
		include('quan_tri/quanlibaidang/baidang.php');
		break;
		case 'chitietbd':
		include('quan_tri/quanlibaidang/chitietbaidang.php');
		break;
		case 'duyet_baidang':
		include('quan_tri/duyetbaidang/duyetbaidang.php');
		break;
		case 'duyet':
		include('quan_tri/duyetbaidang/ex_duyet_bd.php');
		break;
		case 'xoa_baidang':
		include('quan_tri/quanlibaidang/xoabaidang.php');
		break;
		case 'sua_baidang':
		include('quan_tri/quanlibaidang/suabaidang.php');
		break;
		case 'luu_sua_bd':
		include('quan_tri/quanlibaidang/luubaidang.php');
		break;
		case 'ql_nguoidung':
		include('quan_tri/qlnguoidung/qlnguoidung.php');
		break;
		case 'sua_nguoidung':
		include('quan_tri/qlnguoidung/suanguoidung.php');
		break;
		case 'luu':
		include('quan_tri/qlnguoidung/ex_suanguoidung.php');
		break;
		case 'xoa_nguoidung':
		include('quan_tri/qlnguoidung/xoanguoidung.php');
		break;
		case 'ql_donhang':
		include('quan_tri/qldonhang/qldonhang.php');
		break;
		case 'chitietdh':
		include('quan_tri/qldonhang/chitietdh.php');
		break;
		case 'duyetdh':
		include('quan_tri/qldonhang/capnhatdonhang.php');
		break;
		case 'luu_dh':
		include('quan_tri/qldonhang/ex_capnhatdonhang.php');
		break;
		case 'xoa_dh':
		include('quan_tri/qldonhang/xoadh.php');
		break;
		///// van chuyen
		case 'ql_vanchuyen':
		include('quan_tri/quanlivanchuyen/qlvanchuyen.php');
		break;
		case 'sua_tt_vc':
		include('quan_tri/quanlivanchuyen/capnhatvc.php');
		break;
		case 'chitiet_vc':
		include('quan_tri/quanlivanchuyen/chitietvc.php');
		break;
		case 'luu_vc':
		include('quan_tri/quanlivanchuyen/ex_capnhatvc.php');
		break;
		case 'xoa_vc':
		include('quan_tri/quanlivanchuyen/xoa_vc.php');
		break;
	}

}

?>