<?php
$sql="select * from loai";
	$query = mysqli_query($conn,$sql); 

if(isset($_POST['submit'])){
	$tenloai=$_POST['tenloai'];
	$sql="insert into loai(tenloai) value ('$tenloai')";
	$query= mysqli_query($conn,$sql);
	header('location:qlloai.php?page_layout=danhsachloai');
}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Loại</h2>
		</div>
			<div class="card-body">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="">Tên Loại</label>
				<input type="text" name="tenloai" class="form-control" required >
			</div>
				<button  class="btn btn-success" name="submit" type="submit">Thêm</button>
		</form>
		
		</div>
	</div>	

</div>