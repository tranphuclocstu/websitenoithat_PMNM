<?php
	$sql="select * from loai";
	$query = mysqli_query($conn,$sql);
?>
<div class="table-bordered">
	<a class="btn btn-primary" href="qlsp.php">Danh sách sản phẩm</a>
	<a class="btn btn-primary" href="qlloai.php">Danh  sách loại</a>
	<a class="btn btn-primary" href="qlnhasanxuat.php">danh sách  nhà sản xuất</a>
</div>
<div class="container-fluid">
	<div class="table-bordered">
		<div class="card-header">
			<h2>Danh sách loại</h2>
		</div>
			<div class="card-body">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>Mã loại</th>
					<th>Tên loại</th>
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
					<td><?php echo $row['tenloai'];?></td>

					<td>
						<a class="btn btn-warning" href="qlloai.php?page_layout=sualoai&id=<?php echo $row['maloai']; ?>">Sửa</a>
					</td>
					<td>
						<a class="btn btn-danger" onclick="return xoa('<?php echo $row['tenloai']; ?>')" href="qlloai.php?page_layout=xoaloai&id=<?php echo $row['maloai']; ?>">Xóa</a>
					</td>
				</tr>
		<?php }	?>

			</tbody>
		</table>
			<a class="btn btn-success" href="qlloai.php?page_layout=themloai">Thêm Loại</a>

		</div>
	</div>	

</div>
<script>
	function xoa(name){
		return confirm("Bạn có chắc muốn  xóa loại:"+ name+"?");
	}
</script>