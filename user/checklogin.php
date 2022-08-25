<?php
  session_start();
  include "../admin/connect.php";
  $qry="select * from customer";
  $res=mysqli_query($db,$qry);
  foreach ($res as $value){
    $username=$value["username"];
    $password=$value["password"];
  if($_SESSION["username"]==$username && $_SESSION["password"]==$password){

    header("location:success.php");
  }else{
    header("location:cart.php");
  }
}
 ?>
