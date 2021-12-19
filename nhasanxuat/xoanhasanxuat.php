<?php
$id=$_GET['id'];
$sql="delete from nhasanxuat where manhasanxuat=$id";
$query=mysqli_query($conn,$sql);
header('location:qlnhasanxuat.php?page_layout=danhsachnhasanxuat');
?>