<?php
include 'config/db.php';
?>
<?php
include 'layout/header.php';
?>
<div class="container">
	<?php
				$masp=$_GET['masp'];
				$sql ="select * from sanpham where masp=$masp ";
				$query=mysqli_query($conn,$sql);
				$row=mysqli_fetch_assoc($query);
	?>
	<div class=" single_top">
		<div class="single_grid">
			<div class="grid images_3_of_2">
				
				<div>
					<a><img  src="images/<?php echo $row['hinh']?>" class="img-responsive" /></a>
					
				</div>
				
				
				
				<div class="clearfix"> </div>
			</div>
			<div class="desc1 span_3_of_2">
				
				<h4><?php echo $row['tensp']?></h4>
				<div class="cart-b">
					<div class="left-n ">Giá : <?php echo $row['gia']?>VND</div>
					<a class="now-get get-cart-in" href="cart_submit.php?action=them&masp=<?php echo $row['masp'] ?>">Thêm vào giỏ hàng</a>
					
					<div class="clearfix"></div>
				</div>
				
				
				
				<p>Mô tả :<?php echo $row['mota']?></p>
			</li>
			<div class="share">
				<h5>Share Product :</h5>
				<ul class="share_nav">
					<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
					<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
					<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
					<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
						autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint:480,
					visibleItems: 1
				},
				landscape: {
					changePoint:640,
					visibleItems: 2
				},
				tablet: {
					changePoint:768,
					visibleItems: 3
				}
			}
		});
		
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	
</div>

<!---->
<?php
include 'layout/danhmuc.php';
?>
<div class="clearfix"> </div>
</div>
<!---->
<?php
include 'layout/footer.php';
?>