
<form action="?menu=exec_dang_nhap" method="post" style="height: 300px;">
	<!-- <table class="table" style="width: 400px; margin: 0 auto; margin-top: 40px;">
		<tr>
			<td colspan="2"><i class="glyphicon glyphicon-user"></i>Đăng nhập</td>
		</tr>
		<tr>
			<td><label for="user">Tên đăng nhập: </label></td>
			<td><input  class="form-control" type="text" name="username" id="user" placeholder="Nhập tên đăng nhập.." required ></td>
		</tr>
		<tr>
			<td><label for="pass">Mật khẩu:</label></td>
			<td><input  class="form-control" type="password" name="password" id="pass" placeholder="Nhập mật khẩu.." required ></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-info" value="Đăng nhập"></td>
		</tr>
	</table> -->
	<div class="row" style="padding-top: 30px;">
                <div class="col-md-6 col-sm-6" style="margin-left: 200px;">
                    <div class=" panel panel-info">
                        <div class="panel-heading bg-success">
                            <h3 class="text-center panel-title" style="color: blue;">Đăng nhập</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Tên đăng nhập" name="username" type="text" autofocus  required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="" required>
                                    </div>
                                    
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input style="margin-left: 120px;" type="submit" name="submit" class="btn btn-lg btn-info" value="Đăng nhập">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</form>