<?php $ma_bai_dang=$_GET['id']; ?>
		<div class="content">
			<h1 class="text-center text-danger">Hổ trợ vận chuyển </h1>
			<form action="?menu=exec_van_chuyen" style="width: 700px;margin: 0 auto;" method="POST">
				<input type="hidden" name="mabd" value="<?php echo $ma_bai_dang ?>">
				<div class="col-md-6 col-lg-6" style="margin-left: 100px">
					<div class="form-group">
						<label for="">Tuyến chạy :</label>
						<input type="text" class="form-control" name="tuyenchay" placeholder="Nhập nội dung" required>
					</div>
					<div class="form-group">
						<label for="">Giá tiền :</label>
						<input type="number" class="form-control" name="gia" placeholder="Nhập nội dung" required>
					</div>
					<div class="form-group">
						<label for="">Số điện thoại :</label>
						<input type="text" class="form-control" name="sdt" placeholder="Nhập nội dung" required>
						
					</div>
					
					
				</div>
				<div class="col-md-6" style="margin-left: 200px;margin-top: 20px;">
					<input class="btn btn-info" type="submit" name="submit" value="Lưu">
					<input class="btn btn-danger" type="reset"  value="Hủy">
				</div>
				

			</form>
		</div>
		
		
	


	