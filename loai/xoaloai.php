<?php
$id=$_GET['id'];
$sql="delete from loai where maloai=$id";
$query=mysqli_query($conn,$sql);
header('location:qlloai.php?page_layout=danhsachloai');
?>