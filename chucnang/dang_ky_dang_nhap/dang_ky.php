
<div class="panel panel-info">
    <div class="panel-heading">Đăng ký</div>
    <div class="panel-body">
    <p class="alert alert-warning"><strong>Lưu ý: </strong>Các thông tin có dấu <span style="color: red;">(*)</span> đều là bắt buộc.</p>
    <form action="?menu=exec_dang_ky" method="POST" role="form" data-toggle="validator">
	<table class="table">
		<tr>
			<td><label for="hoten">Họ và tên:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" name="hoten" id="hoten" class="form-control"  placeholder="Nhập họ và tên bạn.." required ></td>
		</tr>
		
		<tr>
			<td><label for="user">Tên đăng khập:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" name="username" id="user" class="form-control" placeholder="Nhập tên đăng nhập.." required ></td>
		</tr>
		<tr>
			<td><label for="pass">Mật khẩu:</label> <span style="color: red;">(*)</span></td>
			<td><input type="password" name="password" id="pass" class="form-control" placeholder="Nhập mật khẩu.." required ></td>
		</tr>
		<tr>
			<td><label for="repass">Nhập lại mật khẩu:</label> <span style="color: red;">(*)</span></td>
			<td><input type="password" name="re-pass" class="form-control" id="repass" placeholder="Nhập lại mật khẩu.." required ></td>
		</tr>
		
		<tr>
			<td><label for="sdt">Số điện thoại:</label> <span style="color: red;">(*)</span></td>
			<td><input type="number" name="sdt" id="sdt" class="form-control"  placeholder="Nhập số điện thoại.." required ></td>
		</tr>
		<tr>
			<td><label for="diachi">Địa chỉ:</label> <span style="color: red;">(*)</span></td>
			<td><input type="text" name="diachi" id="diachi" class="form-control"  placeholder="Tổ, thôn...." required ></td>
		</tr>
		
		
		
		<tr>
			<td align="center"><input type="submit" class="btn btn-info" name="submit" value="Đăng ký"></td></form>
			<td align="center"><form action="?menu=exec_dang_ky" action="POST"><input type="submit" class="btn btn-danger" name="cancel" value="Hủy"></form></td>
		</tr>
	</table>
</form>
</div>
</div>
