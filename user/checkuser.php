<?php
  session_start();
  include "../admin/connect.php";
  $qry="select * from customer";
  $res=mysqli_query($db,$qry);
  foreach ($res as $value){
    $username=$value["username"];
    $password=$value["password"];
  if($_SESSION["username"]==$username && $_SESSION["password"]==$password){

    header("location:order.php");
  }else{
    echo "<script>window.alert('You are not Login ! Please Log In Here ')</script>";
    echo "<script>window.location.href='login.php'</script>";
  }
}
 ?>
