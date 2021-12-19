<?php
$id=$_GET['id'];


$sql_up ="select * from nhasanxuat where manhasanxuat=$id ";
$query_up=mysqli_query($conn,$sql_up); 
$row_up=mysqli_fetch_assoc($query_up);

if(isset($_POST['submit'])){
	$tennhasanxuat=$_POST['tennhasanxuat'];
	$sql="update nhasanxuat set tennhasanxuat ='$tennhasanxuat' where manhasanxuat=$id";

	$query= mysqli_query($conn,$sql);
	header('location:qlnhasanxuat.php?page_layout=danhsachnhasanxuat');
}



?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa Nhà sản xuất</h2>
		</div>
			<div class="card-body">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="">Tên nhà sản xuất</label>
				<input type="text" name="tennhasanxuat" class="form-control" required value="<?php echo $row_up['tennhasanxuat'] ?>">
			</div>


<button  class="btn btn-success" name="submit" type="submit">Sửa</button>
		</form>
		
	

		</div>
	</div>	

</div>