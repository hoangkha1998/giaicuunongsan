<?php 
if(isset($_GET['menu'])){
	$menu= $_GET['menu'];
	// $menu=$_POST['menu'];
	switch($menu){ 
		case 'gioithieu':include('gioithieu/gioithieu.php');	break;
		case 'hdmuahang':include('gioithieu/hdmuahang.php');	break;
		case 'dang_ky': include('chucnang/dang_ky_dang_nhap/dang_ky.php'); break;
		case 'dang_nhap': include('chucnang/dang_ky_dang_nhap/dang_nhap.php'); break;
		case 'exec_dang_ky': include('chucnang/dang_ky_dang_nhap/exec_dang_ky.php'); break;
		case 'exec_dang_nhap': include('chucnang/dang_ky_dang_nhap/exec_dang_nhap.php');break;
		case 'logout': include('chucnang/dang_ky_dang_nhap/logout.php'); break;
		case 'doimk': include('chucnang/dang_ky_dang_nhap/doimk.php'); break;
		case 'exec_doimk': include('chucnang/dang_ky_dang_nhap/exec_doimk.php'); break;
		case 'van_chuyen': include('chucnang/vanchuyen/van_chuyen.php'); break;
		case 'exec_van_chuyen': include('chucnang/vanchuyen/exec_van_chuyen.php'); break;
		case 'dang_bai': include('chucnang/dangbai/san_pham.php'); break;
		case 'ql_baidang': include('chucnang/dangbai/ql_baidang.php'); break;
		case 'sua_baidang':			include 'dangbai/suabaidang.php';			break;
		case 'luu_baidang':			include 'dangbai/luu_baidang.php';			break;
		case 'exec_san_pham': include('chucnang/dangbai/exec_san_pham.php'); break;
		case 'ht_van_chuyen': include('chucnang/vanchuyen/ho_tro_vc.php'); break;
		case 'ex_ht_vc': include('chucnang/vanchuyen/ex_ht_vc.php'); break;
		case 'chi_tiet_san_pham': include('chucnang/baidang/chi_tiet_san_pham.php');	break;
		case 'nguoidung': include('chucnang/nguoidung/thong_tin_nd.php');	break;
		case 'muahang': include('chucnang/muahang/muahang.php');	break;
		case 'giohang':
			include 'muahang/vunggiohang.php';
			break;
		case 'xoagiohang':
			include 'muahang/xoagiohang.php';
			break;
		case 'gio_hang': include('chucnang/muahang/giohang.php');	break;
		case 'dathang': include('chucnang/muahang/dathang.php');	break;
		case 'ex_dathang': include('chucnang/muahang/ex_dathang.php');	break;
		case 'xem_dh': include('chucnang/donhang/donhang.php');	break;
		case 'huydh': include('chucnang/donhang/huy_dh.php');	break;
		case 'chon_vc': include('chucnang/donhang/chon_vc_dh.php');	break;
		case 'ex_vcdh': include('chucnang/donhang/ex_vcdh.php');	break;
		case 'xem_ct': include('chucnang/donhang/chitietdh.php');	break;
		case 'chon_tg_vc': include('chucnang/donhang/chon_tg_vc.php');	break;
		case 'search': include('chucnang/timkiem/timkiem.php');	break;
		case 'timkiem_duahau': include('chucnang/timkiem/timkiem_duahau.php');	break;
		case 'timkiem_trung': include('chucnang/timkiem/timkiem_trung.php');	break;
		case 'timkiem_nongsan': include('chucnang/timkiem/timkiem_nongsan.php');	break;
		case 'timkiem_ga': include('chucnang/timkiem/timkiem_giacam.php');	break;
		case 'timkiemspm': include('chucnang/timkiem/timkiemspm.php');	break;
		case 'timkiemsphh': include('chucnang/timkiem/timkiem_spdahh.php');	break;
		case 'spganhh': include('timkiem/timkiemsp_ganhh.php');	break;
		case 'ql_vanchuyen': include('quanlivanchuyen/qlvanchuyen.php');	break;
		case 'chitiet_vc': include('quanlivanchuyen/chitietvc.php');	break;
		case 'sua_tt_vc': include('quanlivanchuyen/capnhatvc.php');	break;
		case 'luu_vc': include('quanlivanchuyen/ex_capnhatvc.php');	break;
		case 'xoa_vc': include('quanlivanchuyen/xoa_vc.php');	break;
		case 'huy': include('huy.php');	break;
	
	}
}
else{
	include('chucnang/baidang/san_pham_trang_chu.php');
	
}
?>