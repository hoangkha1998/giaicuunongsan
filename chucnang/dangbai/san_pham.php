 <?php 
	$qr= "select * from loaisanpham";
	$ex= mysqli_query($connect,$qr);
	// $row= mysqli_fetch_assoc($ex);
	// $result= $row['ten_loai'];
 ?> 
<div class="contenta">
	<h1 class="text-center text-info">Đăng bài</h1>
	<form action="?menu=exec_san_pham" style="width: 800px; margin: 0 auto;" method="POST" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<td><label for="">Loại sản phẩm</label></td>
				<!-- <td><input class="form-control" type="combobox" name="ten_sp" placeholder="Nhập dữ liệu" required></td> -->
				<td><select class="form-control" name="loai_sp" id="">
					<option value="" hidden="chon" selected></option>	
					<?php while($row= mysqli_fetch_assoc($ex)): ?>	
					<option value="<?php echo $row['ten_loai'];?>"><?php echo $row['ten_loai'];?></option>
					<?php endwhile ?>
				</select></td>
			</tr>
			<tr>
				<td><label for="">Tên sản phẩm</label></td>
				<td><input class="form-control" type="text" name="ten_sp" placeholder="Nhập dữ liệu" required></td>
			</tr>
			<tr>
				
				<td><label for="">Hình ảnh</label></td>
				<td><input class="form-control" type="file" name="hinh_anh" ></td>
				
			</tr>
			<tr>
				<td><label for="">Số lượng</label></td>
				<td><input class="form-control" type="text" name="so_luong" placeholder="Nhập dữ liệu"required></td>
			</tr>
			<tr>
				<td><label for="">Đơn giá</label></td>
				<td><input class="form-control" type="text" name="don_gia" placeholder="Nhập dữ liệu"required></td>
			</tr>
			<tr>
				<td><label for="">Địa chỉ</label></td>
				<td><input class="form-control" type="text" name="dia_chi" placeholder="Nhập dữ liệu"required></td>
			</tr>		
			<tr>
				<td><label for="">Ngày hết hạn giải cứu</label></td>
				<td><input class="form-control" type="date" name="ngay_hh"required></td>
			</tr>
			<tr>
				<td><label for="">Mô tả</label></td>
				<td><textarea class="form-control" name="mo_ta" rows="5" placeholder="Nhập nội dung"required></textarea> </td>
			</tr>
			<tr>
				<td colspan="2" style="padding-left: 200px;">
					<!-- <span class="	glyphicon glyphicon-open"><input type="submit" name="dang" class="btn btn-info" value="Đăng bài"></span> -->
					<!-- <input type="submit" name="?menu=huy" class="btn btn-danger" value="Hủy"> -->
					<button class="btn btn-success" name="dang"><span class="	glyphicon glyphicon-open"></span> Đăng bài</button>
					<button type="reset" class="btn btn-danger" ><span class="	glyphicon glyphicon-remove"></span> Đăng bài</button>
					
					
					
					
				</td>
			</tr>
		</table>
	</form>
</div>