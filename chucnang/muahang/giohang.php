<?php
// $mabd= $_POST['ma_bd'] ;
// $qr="select * from sanphamgiaicuu  where ma_bai_dang='".$mabd."'";
$mabd= $_SESSION['ma_bai_dang'] ;
$qr="select * from sanphamgiaicuu  where ma_bai_dang='".$mabd."'";
$ex1= mysqli_query($connect,$qr);
$row= mysqli_fetch_assoc($ex1);
if(isset($_POST["type"]) && $_POST["type"]=='add'){
	// echo "hoang";
	// echo $row['so_luong'];
	$sl= filter_input(INPUT_POST, 'sl');
	if($sl> $row['so_luong']){		
		thong_bao_html_roi_chuyen_trang("Bạn không thể chọn quá số lượng sản phẩm","index.php?menu=muahang");
	}
	$gio= array(array('id'=>$mabd,'ten'=>$row['ten_sp'],'gia'=>$row['don_gia'],'sl'=>$sl));
	if(isset($_SESSION['giohang'])) //Hàm kiểm tra nếu có sản phẩm trong giỏ hàng rồi thì cập nhật lại
	{
            $found = false; //Thiết lập mặc định ban đầu biến kiểm tra sản phẩm tồn tại thành false
            
            foreach ($_SESSION['giohang'] as $cart_itm) //vòng lặp mảng SESSION 
            {
                if($cart_itm["id"] == $_SESSION['mabd']){ //sản phẩm đã tồn tại trong mảng

                	$product[] = array('ten'=>$cart_itm['ten'], 'id'=>$cart_itm['id'], 'sl'=>$cart_itm['sl'], 'gia'=>$cart_itm['gia']);
                    $found = true; // Thiết lập biến kiểm tra sản phẩm tồn tại thành true
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                	$product[] = array('ten'=>$cart_itm['ten'], 'id'=>$_SESSION['mabd'], 'sl'=>$cart_itm['sl'], 'gia'=>$cart_itm['gia']);
                }
            }
            
            if($found == false) //Không tìm thấy sản phẩm trong giỏ hàng
            {
                //Thêm mới sản phẩm vào mảng
            	$_SESSION['products'] = array_merge($product, $gio);
            }else{
                //Tìm thấy sản phẩm đã có trong mảng SESSION nên chỉ cập nhật lại số lượng(QTY)
            	$_SESSION['products'] = $product;
            }
            
        }else{
            //Tạo biến SESSION mới hoàn toàn nếu không có sản phẩm nào trong giỏ hàng
        	$_SESSION['products'] = $gio;
        }
         echo "<script> location.href='javascript: history.back(-1);'; </script>";
    }

    ?>