<?php
include("../../../path.php");
session_start();

if(!isset($_SESSION['id'])){
	header("location:".BASE_URL."/default.php");
}
else{

	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		if(isset($_GET['quantity']) & !empty($_GET['quantity'])){ $quantity = $_GET['quantity']; }else{ $quantity = 1;}
		$_SESSION['cart'][$id] = array("quantity" => $quantity); 
		header('location: cart.php');
	
	}else{
		header('location: cart.php');
	}
	echo "<pre>";
	print_r($_SESSION['cart']);
	echo "</pre>";
}





?>