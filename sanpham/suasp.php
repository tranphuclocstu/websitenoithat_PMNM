<?php
$id=$_GET['id'];
$sql_loai="select * from loai";
$query_loai= mysqli_query($conn,$sql_loai); 

$sql_nhasanxuat="select * from nhasanxuat";
$query_nhasanxuat= mysqli_query($conn,$sql_nhasanxuat); 

$sql_up ="select * from sanpham where masp=$id ";
$query_up=mysqli_query($conn,$sql_up); 
$row_up=mysqli_fetch_assoc($query_up);

if(isset($_POST['submit'])){
	$tensp=$_POST['tensp'];

if($_FILES['hinh']['name']==''){
	$hinh=$row_up['hinh'];
}else{
	$hinh=$_FILES['hinh']['name'];
	$hinh_tmp=$_FILES['hinh']['tmp_name'];
	move_uploaded_file($hinh_tmp,'images/'.$hinh);
}
	
	$gia=$_POST['gia'];
	$soluong=$_POST['soluong'];
	$mota=$_POST['mota'];
	$maloai=$_POST['maloai'];
	$manhasanxuat=$_POST['manhasanxuat'];
	$sql="update sanpham set tensp ='$tensp',hinh ='$hinh',gia ='$gia',soluong ='$soluong',mota = '$mota',maloai ='$maloai', manhasanxuat='$manhasanxuat' where masp=$id";
	$query= mysqli_query($conn,$sql);
	header('location: qlsp.php?page_layout=danhsachsp');
}
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Sửa sản phẩm</h2>
		</div>
			<div class="card-body">
		<form method="POST" enctype="multipart/form-data">

			<div class="form-group">
				<label for="">Tên sản phẩm</label>
				<input type="text" name="tensp" class="form-control" required value="<?php echo $row_up['tensp'] ?>">
			</div>

			<div class="form-group">
				<label for="">Ảnh sản phẩm</label> <br>
				<input type="file" name="hinh" >
			</div>

			<div class="form-group">
				<label for="">Giá</label>
				<input type="number" name="gia" class="form-control"required value="<?php echo $row_up['gia'] ?>">
			</div>

			<div class="form-group">
				<label for="">Số lượng</label>
				<input type="number" name="soluong" class="form-control"required value="<?php echo $row_up['soluong'] ?>">
			</div>

			<div class="form-group">
				<label for="">Mô tả</label>
				<input type="text" name="mota" class="form-control"required value="<?php echo $row_up['mota'] ?>">
			</div>

			<div class="form-group">
				<label for=""> Loại</label>
				<select class="form-control" name="maloai">
					<?php
					while ($row_loai = mysqli_fetch_assoc($query_loai)){?>
						<option value="<?php echo $row_loai['maloai'];?>">
							<?php echo $row_loai['tenloai'];?></option>
					} 
			<?php	} ?>
				</select>
			</div>
			<div class="form-group">
				<label for=""> Nhà sản xuất</label>
				<select class="form-control" name="manhasanxuat">
					<?php
					while ($row_nhasanxuat = mysqli_fetch_assoc($query_nhasanxuat)){?>
						<option value="<?php echo $row_nhasanxuat['manhasanxuat'];?>">
							<?php echo $row_nhasanxuat['tennhasanxuat'];?></option>
					} 
			<?php	} ?>
				</select>
			</div>
<button  class="btn btn-success" name="submit" type="submit">Sửa</button>
		</form>
		</div>
	</div>	

</div>