<?php
if (!isset($_SESSION)) session_start();
$tam= isset($_SESSION['cart'])?$_SESSION['cart']:[];
if(isset($_SESSION["se"]));
?>
<?php
	include 'config/db.php';
?>
<?php
include 'layout/header.php';
?>
<div class="container-fluid">
	<div class="table-bordered">
		<div class="card-header" >
			<h2>GIỎ HÀNG CỦA BẠN</h2>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead class="thead-dark">
					<tr>
						<th>STT</th>
						<th>Ảnh sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=0;
					foreach ($tam as $masp => $value)
					{
					$sql= "select * from sanpham where masp='$masp'";
					$stm = mysqli_query($conn, $sql);
					$row = $stm->fetch_assoc();
					$i++;
					?>
					<tr>
						<td><?php echo $i ?></td>
						
						<td><img style="width:100px;"src="images/<?php echo $row['hinh'];?>"></td>
						<td><?php echo $row['tensp'] ?></td>
						<td><?php echo $row['gia'] ?></td>
						<td><?php echo $value ?></td>
						<td><?php echo $value *$row['gia'] ?></td>
						<td>
							<a class="btn btn-danger" href="cart_submit.php?action=xoa&masp=<?php echo $masp ?>">Xóa</a>
						</td>
					</tr>
					<?php } ?>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead class="thead-dark">
							<form method="POST" enctype="multipart/form-data" action="donhang.php">
								<div class="form-group">
									<label for="">Tên người nhận</label>
									<input type="text" name="tenkh" class="form-control" required value="">
								</div>
								
								<div class="form-group">
									<label for="">Địa chỉ</label>
									<input type="text" name="dia chi" class="form-control"required value="">
								</div>
								<div class="form-group">
									<label for="">SĐT</label>
									<input type="text" name="sdt" class="form-control"required value="">
								</div>
								<div class="form-group">
									<label for="">Ghi chú</label>
									<input type="text" name="ghichu" class="form-control"required value="">
								</div>

					<button class="btn btn-success" name="submit" href="">Đặt hàng</button>
							</form>
						</thead>
					</table>
					<a class="btn btn-primary" href="index.php">Tiếp tục mua sắm</a>
				</div>
				
			</div>
		</div>
		<?php
		include 'layout/footer.php';
		?>