<?php
$id=$_GET['id'];
$sql="delete from sanpham where masp=$id";
$query=mysqli_query($conn,$sql);
header('location: qlsp.php?page_layout=danhsachsp');
?>