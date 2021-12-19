<?php
require_once 'config/db.php'; 
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
	<?php
	if(isset($_GET['page_layout'])){
		switch ($_GET['page_layout']) {
			case 'danhsach':
				require_once 'sanpham/danhsachsp.php';
				break;
				case 'suasp':
				require_once 'sanpham/suasp.php';
				break;
				case 'themsp':
				require_once 'sanpham/themsp.php';
				break;
				case 'xoasp':
				require_once 'sanpham/xoasp.php';
				break;
			
			default:
				require_once 'sanpham/danhsachsp.php';
				break;
		}
	}else{
		require_once 'sanpham/danhsachsp.php';
	}
	?>
	
</body>
</html>