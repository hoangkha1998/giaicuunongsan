
<?php
	if(isset($_GET['menuqt'])){
	$menu= $_GET['menuqt'];
	switch($menu){
		
		case 'logout': include('logout.php'); break;
		
	}
}
else{
	include('../content.php');
}
?>