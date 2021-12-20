<?php
include 'layout/header.php';
?>
<div class="container">
	
	<div class="register">
		<form action="register_submit.php" method="post">
			<div class="  register-top-grid">
				<h3>ĐĂNG KÝ</h3>
				<div class="mation">
					<span>Tên đăng nhập :</span>
					<input type="text" name="tendangnhap">
					<span>Họ tên :</span>
					<input type="text" name="tenkh">
					<span>Địa chỉ :</span>
					<input type="text" name ="diachi">
					<span>Số điện thoại :</span>
					<input type="text" name="sdt">
					<span>Mật khẩu :</span>
					<input type="password" name ="password">
					<span>Nhập lại mật khẩu :</span>
					<input type="password" name="repassword">
				</div>
			</div>
			<form>
				<button class="acount-btn" type="submit" name="submit">Đăng ký</button>
			</form>
		</form>
		<div class="clearfix"> </div>
		<div class="register-but">
		</div>
	</div>
		<div class="clearfix"> </div>
	</div>

	<?php
	include 'layout/footer.php';
	?>