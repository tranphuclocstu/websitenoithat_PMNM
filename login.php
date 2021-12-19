<?php
include_once 'config/db.php';
?>
<?php
include 'layout/header.php';
?>
<div class="container">
	<div class="account_grid">
		<div class="login-right">
			<h3>ĐĂNG NHẬP KHÁCH HÀNG</h3>
			<p> Nếu bạn có tài khoản, vui lòng đăng nhập</p>
			<form action="login_submit.php" method="post">
				<div>
					<span>Tên đăng nhập :</span>
					<input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập">
				</div>
				<div>
					<span>Mật khẩu :</span>
					<input type="password" name ="password" placeholder="Nhập mật khẩu">
				</div>
				<button class="acount-btn" type="submit" name="submit">Đăng nhập</button>
				<br><br>
				<div>
					Bạn chưa có tài khoản?
					<a href="register.php">Đăng ký</a>
				</div>
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
	<?php
	include 'layout/danhmuc.php';
	?>
	<?php
	include 'layout/footer.php';
	?>