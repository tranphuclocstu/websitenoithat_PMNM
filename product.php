<?php
include 'config/db.php';
?>
<?php
include 'layout/header.php';
?>
<div class="container">
	
	<div class="women-product">
		<div class="products">
			<h5 class="latest-product">Tất cả sản phẩm</h5>
			
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
						
						
						
						<a class="now-get get-cart" href="cart_submit.php?action=them&masp=<?php echo $row['masp'] ?>">Thêm vào giỏ hàng</a>
						
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
	<!---->
	<?php
	include 'layout/footer.php';
	?>