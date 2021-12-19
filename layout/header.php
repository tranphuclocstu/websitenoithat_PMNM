<?php
if (!isset($_SESSION)) session_start();
$tam= isset($_SESSION['cart'])?$_SESSION['cart']:[];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nội thất </title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!--theme-style-->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!--//fonts-->
		<script src="js/jquery.min.js"></script>
		<!--script-->
	
	</head>
	<body>
		<!--header-->
		<div class="header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<ul class="support">
							<li><a href="#"><label> </label></a></li>
							<li><a href="#">Tư vấn :<span class="live"> 0933917048</span></a></li>
						</ul>
						
						<div class="clearfix"> </div>
					</div>
					<div class="top-header-right">
						
						<ul class="support">
							<li class="van"><a href="#"><label> </label></a></li>
							<li><a href="#">Miễn phí <span class="live">Vận chuyển toàn quốc</span></a></li>
						</ul>
						<!---->
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container">
					<div class="header-bottom-left">
						<div class="logo" >
							<a href="index.php"><img src="images/logo.jpg" alt=" " /></a>
						</div>
						<div class="search">
							<form>
							<input type="text" name="tensp" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							<input type="submit"  value="Tìm kiếm"/>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="header-bottom-right">
						<div class="account"><a href="thongtinkhachhang.php"><span> </span><?php echo  isset($_SESSION['se'])?$_SESSION['se']: "Tài khoản" ?></a></div>
						<ul class="login">
							
							<?php
							
							if(isset($_SESSION["se"])){
							?>
							
							<li><a href="logout.php"><span> </span>Đăng xuất</a></li>
						</ul>
						<div class="cart"><a href="cart.php"><span></span>Giỏ hàng</a></div>
						
						<?php }	else{ ?>
						<li><a href="login.php"><span> </span>Đăng nhập</a></li>
						
						
						
						
						
					</ul>
					<div class="cart"><a href="login.php"><span></span>Giỏ hàng</a></div>
					<?php	} ?>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---->