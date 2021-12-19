<?php
$sql="select * from nhasanxuat";
	$query = mysqli_query($conn,$sql); 

if(isset($_POST['submit'])){
	$tennhasanxuat=$_POST['tennhasanxuat'];
	$sql="insert into nhasanxuat(tennhasanxuat) value ('$tennhasanxuat')";
	$query= mysqli_query($conn,$sql);
	header('location:qlnhasanxuat.php?page_layout=danhsachnhasanxuat');
}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Thêm Nhà sản xuất</h2>
		</div>
			<div class="card-body">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="">Tên nhà sản xuất</label>
				<input type="text" name="tennhasanxuat" class="form-control" required >
			</div>
				<button  class="btn btn-success" name="submit" type="submit">Thêm</button>
		</form>
		
		</div>
	</div>	

</div>