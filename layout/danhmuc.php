<div class="sub-cate">
	<div class=" top-nav rsidebar span_1_of_left">
		<h3 class="cate">Loại sản phẩm</h3>
		<ul class="menu">
			<?php
			$sql ="SELECT * FROM `danhmuc` WHERE 1";
			$stm = mysqli_query($conn, $sql);
			if($stm->num_rows>0){
			while($row = $stm->fetch_assoc()){?>
			<li class="subitem1"><a href="product.php?id=<?php echo $row["tendm"]?>"><?php echo $row['tendm'] ?> </a>
			
			<ul class="cute">
				<?php
							$sql ="SELECT * FROM `loai` WHERE 1";
							$i = mysqli_query($conn, $sql);
							if($i->num_rows>0){
				while($row = $i->fetch_assoc()){?>
				<li class="subitem1"><a href="product.php?id=<?php echo $row["tenloai"]?>"><?php echo $row['tenloai'] ?> </a>
				
				<?php }
				}?>
			</ul>
		</li>
		<?php }
		}
		?>
		
	</ul>
	<ul class="menu">
		<li class="subitem1"><a href="">Đồ trang trí </a>
		<li class="subitem1"><a href="">Tư vấn </a>
	</ul>
</div>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	var menu_ul = $('.menu > li > ul'),
	menu_a  = $('.menu > li > a');
	menu_ul.hide();
	menu_a.click(function(e) {
	e.preventDefault();
	if(!$(this).hasClass('active')) {
	menu_a.removeClass('active');
	menu_ul.filter(':visible').slideUp('normal');
	$(this).addClass('active').next().stop(true,true).slideDown('normal');
	} else {
	$(this).removeClass('active');
	$(this).next().stop(true,true).slideUp('normal');
	}
	});
	
	});
</script>
<div class=" chain-grid menu-chain">
	<a href="single.html"><img class="img-responsive chain" src="images/sofa1.jpg" alt=" " /></a>
	<div class="grid-chain-bottom chain-watch">
		<span class="actual dolor-left-grid">6000000 VND</span>
		<span class="reducedfrom">5000000 VND</span>
		<h6><a href="single.html">Ghế sofa cao cấp</a></h6>
	</div>
</div>
<a class="view-all all-product" href="product.html">Xem tất cả sản phẩm<span> </span></a>
</div>
</div>
<div class="clearfix"> </div>
</div>