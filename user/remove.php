<?php
	session_start();
	$id=$_GET['cid'];
	unset($_SESSION['cart'][$id]);
	header("location:cart.php");
?>
