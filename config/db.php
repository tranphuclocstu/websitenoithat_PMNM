<?php 
$conn= mysqli_connect("localhost","root","","quanlynoithat");
if($conn){
	mysqli_query($conn, "SET NAMES 'UTF8'");
}
else{
	echo "ket noi that bai";
}
?>