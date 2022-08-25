<?php
  session_start();
  $id=$_GET["cid"];
  $_SESSION["cart"][$id]++;
  header("location:cart.php");
 ?>
