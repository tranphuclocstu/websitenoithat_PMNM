<?php
session_start();
	include_once 'config/db.php';
if(isset($_POST['submit']) && $_POST["tendangnhap"] !=''&& $_POST["password"] !=''){
	$tendangnhap=$_POST["tendangnhap"];
	$password =$_POST["password"];
	
	$sql= "select * from quantri where tendangnhap='$tendangnhap' and password='$password'";
	$i=mysqli_query($conn,$sql);
	if(mysqli_num_rows($i)>0){
		$_SESSION["se"]=$tendangnhap;
		header("location:quanly.php");
	}else{
		 $message = "Tài khoản hoặc Mật khẩu không đúng!\\nVui lòng kiểm tra lại!";
      echo "<script type='text/javascript'>alert('$message');</script>";  
  }
}else{
	header("location:admin.php");
}