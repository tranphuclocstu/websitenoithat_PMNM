<?php
if (!isset($_SESSION)) session_start();
$tam= isset($_SESSION['cart'])?$_SESSION['cart']:[];
$action= isset($_GET['action'])?$_GET['action']:'';
if ($action=='them')
{
	$masp= isset($_GET['masp'])?$_GET['masp']:'';
	$soluong = 1;
	if ($masp!='')
	{
		if (isset($tam[$masp]))
			$tam[$masp] += $soluong;
		else 
			$tam[$masp]= $soluong;
	}
}

if ($action=='xoa')
{
	$masp= isset($_GET['masp'])?$_GET['masp']:'';
	unset($tam[$masp]);
	
}
if ($action=='huy')
{
	$tam=[];
}
$_SESSION['cart']= $tam;
header('location:cart.php');