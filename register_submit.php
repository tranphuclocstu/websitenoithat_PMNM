<?php
	include_once 'config/db.php';; 
if(isset($_POST['submit']) && $_POST["tendangnhap"] !=''&& $_POST["tenkh"] !=''&& $_POST["diachi"] !=''&& $_POST["sdt"] !=''&& $_POST["password"] !=''&& $_POST["repassword"] !=''){
	$tendangnhap =$_POST["tendangnhap"];
	$tenkh =$_POST["tenkh"];
	$diachi =$_POST["diachi"];
	$sdt =$_POST["sdt"];
	$password =$_POST["password"];
	$repassword =$_POST["repassword"];
	$makh=0;
	if($password != $repassword){
		echo " sai mat khau";
	}
	$sql= "select * from khachhang where tendangnhap='$tendangnhap' and tenkh='$tenkh' and diachi='$diachi' and sdt='$sdt' and password='$password'";
	$i=mysqli_query($conn,$sql);
	$password=md5($password);
	if(mysqli_num_rows($i)>0){
		header("location:register.php");
	} 
	$sql= "insert into khachhang(tendangnhap,tenkh,diachi,sdt,password) values ('$tendangnhap','$tenkh','$diachi','$sdt','$password')";
	mysqli_query($conn, $sql);
	echo " da dang ki thanh cong";
	
	header("location:login.php");

}else {
	header("location:register.php");
}

?>