<?php
	unset($_SESSION['username']);
	echo "<script> alert('Đăng xuất thành công');</script>";
	echo "<script> location.href='index.php'; </script>";
?>