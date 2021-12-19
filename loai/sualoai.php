<?php
$id=$_GET['id'];


$sql_up ="select * from loai where maloai=$id ";
$query_up=mysqli_query($conn,$sql_up); 
$row_up=mysqli_fetch_assoc($query_up);

if(isset($_POST['submit'])){
	$tenloai=$_POST['tenloai'];




	$sql="update loai set tenloai ='$tenloai' where maloai=$id";

	$query= mysqli_query($conn,$sql);
	
	header('location:qlloai.php?page_layout=danhsachloai');
}



?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa loại</h2>
		</div>
			<div class="card-body">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" name="tenloai" class="form-control" required value="<?php echo $row_up['tenloai'] ?>">
			</div>


<button  class="btn btn-success" name="submit" type="submit">Sửa</button>
		</form>
		
	

		</div>
	</div>	

</div>