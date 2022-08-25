<?php
session_start();
$id=$_GET['cid'];
foreach($_SESSION['cart'] as $oid => $qty){

	if($id==$oid){

		if($qty==1){
			unset($_SESSION['cart'][$id]);
		}else{
		$rqty=$qty-1;
		$_SESSION['cart'][$id]=$rqty;
		}
	}
}
header ("location:cart.php");


?>
