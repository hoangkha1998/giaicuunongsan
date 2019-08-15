<nav class="menu navbar-default">
	<div class="container">
		
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php" title="Trang chủ">Trang chủ</a></li>
				<?php if (isset($_SESSION['username'])){ ?>					
					<!-- <li><a href="?menu=dang_bai" title="Đăng bài ">Đăng bài </a></li> -->
					<!-- <li><a href="?menu=van_chuyen" title="Hổ trợ vận chuyển">Hổ trợ vận chuyển</a></li> -->
					<li>
						<div class="dropdown" style="padding-top: 10px; ">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #ECAB53;">Bài đăng
								<span class="caret"></span></button>
								<ul class="dropdown-menu" style="background-color: #ECAB53;">
									<li><a href="?menu=dang_bai">Đăng bài</a></li>
									<li><a href="?menu=ql_baidang">Quản lí bài đăng</a></li>
									
								</ul>
							</div>	
					</li>
					<li><a href="?menu=xem_dh" title="Xem đơn hàng">Xem đơn hàng</a></li>
					<li><a href="?menu=ql_vanchuyen" title="Quản lí vận chuyển">Quản lí vận chuyển</a></li>			
				<?php }else{ ?>					
					<li class="disabled"><a href="">Đăng bài </a></li>
					<!-- <li class="disabled"><a href="">Hổ trợ vận chuyển</a></li> -->
					<li class="disabled"><a href="">Xem đơn hàng</a></li>				
				<?php }; ?>
				<li><a href="?menu=hdmuahang">Hướng dẫn đăng tin & mua hàng</a></li>
				<li><a href="?menu=gioithieu">Giới thiệu</a></li>
				<a style="margin-top: 10px;" class="btn btn-success" href="?menu=giohang"><span class="fa fa-shopping-cart"></span> (
					<?php 
					if (isset($_SESSION['username'])) {
						if(isset($_SESSION['products'])){
						$cart= count($_SESSION['products']);
						echo $cart;
					} 
					else { $cart=0;
						echo $cart;}
					}else{
						unset($_SESSION['products']);
						$cart=0;
						echo $cart;
					}
					 ?>
					
					)</a> 
					</ul>
				</div>

			</div>
		</nav>
