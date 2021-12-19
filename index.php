<?php
include_once 'config/db.php';;
?>
<?php
include 'layout/header.php';
?>
<!---->
<div class="container">
	<div class="shoes-grid">
		<a href="single.html">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-matter">
								<div class="col-md-5 banner-bag">
									<img class="img-responsive " src="images/sofa2.jpg" alt=" " />
								</div>
								<div class="col-md-7 banner-off">
									<h2>SALE 50%</h2>
									<h4>Từ 22/10/2019-30/10/2019</h4>
									<hr>
									<span class="on-get">Mua ngay</span>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							
						</article>
						
						
					</div>
				</a>
				<ul class="wmuSliderPagination">
					<li><a href="#" class="">0</a></li>
					<li><a href="#" class="">1</a></li>
					<li><a href="#" class="">2</a></li>
				</ul>
				<script src="js/jquery.wmuSlider.js"></script>
				<script>
				$('.example1').wmuSlider();
				</script>
			</div>
		</div>
	</a>
	<div class="products">
		<h5 class="latest-product">Sản phẩm mới nhất</h5>
		<a class="view-all" href="product.php">Xem tất cả<span> </span></a>
	</div>
	<div class="product-left">
		<?php
			$sql ="SELECT * FROM `sanpham` WHERE 1";
			$stm = mysqli_query($conn, $sql);
			if($stm->num_rows>0){
		while($row = $stm->fetch_assoc()){?>
		
		
		<div class="col-md-6 chain-grid grid-top-chain">
			<a href="single.php?masp=<?php echo $row['masp']?>"><img class="img-responsive chain" src="images/<?php echo $row['hinh'];?>"></a>
			<span class="star"> </span>
			<div class="grid-chain-bottom">
				<h6><a href="single.php?masp=<?php echo $row['masp']?>"><?php echo $row['tensp'] ?> </a></h6>
				<div class="star-price">
					<span class="actual"><?php echo $row['gia'] ?> VND </span>
					<span class="rating">
						<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
						<label for="rating-input-1-5" class="rating-star1"> </label>
						<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
						<label for="rating-input-1-4" class="rating-star1"> </label>
						<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
						<label for="rating-input-1-3" class="rating-star"> </label>
						<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
						<label for="rating-input-1-2" class="rating-star"> </label>
						<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
						<label for="rating-input-1-1" class="rating-star"> </label>
					</span>
					<?php
							
							if(isset($_SESSION["se"])){
					?>
					<a class="now-get get-cart" href="cart_submit.php?action=them&masp=<?php echo $row['masp'] ?>">Thêm vào giỏ hàng</a>
					
					<?php }	else{ ?>
					<a class="now-get get-cart" href="login.php">Thêm vào giỏ hàng</a>
					
					<?php	} ?>
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<?php }
			}
		?>
		<ul class="pagination">
			<li class="page-item"><a class="page-link" href="#">Trước</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">4</a></li>
			<li class="page-item"><a class="page-link" href="#">5</a></li>
			<li class="page-item"><a class="page-link" href="#">Sau</a></li>
		</ul>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>
<?php
include 'layout/danhmuc.php';
?>
<?php
include 'layout/footer.php';
?>