<?php
	$sql="select * from sanpham inner  join loai on sanpham.maloai=loai.maloai inner  join nhasanxuat on sanpham.manhasanxuat=nhasanxuat.manhasanxuat";
	$query = mysqli_query($conn,$sql);
?><div class="table-bordered">
	<a class="btn btn-primary" href="qlsp.php">Danh sách sản phẩm</a>
	<a class="btn btn-primary" href="qlloai.php">Danh  sách loại</a>
	<a class="btn btn-primary" href="qlnhasanxuat.php">danh sách  nhà sản xuất</a>
</div>
<div class="container-fluid">
	<div class="table-bordered">
		<div class="card-header">
			<h2>Danh sách sản phẩm</h2>
		</div>
		<div class="card-body">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Ảnh sản phẩm</th>
						<th>Giá sản phẩm</th>
						<th>Số lượng</th>
						<th>Mô tả</th>
						<th>Loại</th>
						<th>Nhà sản xuất</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
					while($row= mysqli_fetch_assoc($query)){?>
					<tr>
						<td><?php echo $i++?></td>
						<td><?php echo $row['tensp'];?></td>
						<td><img style="width:100px;"src="images/<?php echo $row['hinh'];?>"></td>
						<td><?php echo $row['gia'];?></td>
						<td><?php echo $row['soluong'];?></td>
						<td><?php echo $row['mota'];?></td>
						<td><?php echo $row['tenloai'];?></td>
						<td><?php echo $row['tennhasanxuat'];?></td>
						<td>
							<a class="btn btn-warning" href="qlsp.php?page_layout=suasp&id=<?php echo $row['masp']; ?>">Sửa</a>
						</td>
						<td>
							<a class="btn btn-danger" onclick="return xoa('<?php echo $row['tensp']; ?>')" href="qlsp.php?page_layout=xoasp&id=<?php echo $row['masp']; ?>">Xóa</a>
						</td>
					</tr>
					<?php }	?>
				</tbody>
			</table>
			<a class="btn btn-success" href="qlsp.php?page_layout=themsp">Thêm  sản phẩm</a>
		</div>
	</div>
</div>
<script>
	function xoa(name){
		return confirm("Bạn có chắc muốn  xóa sản phẩm:"+ name+"?");
	}
</script>