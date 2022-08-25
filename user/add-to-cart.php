<?php
  session_start();
  $id=$_GET["id"];
  $_SESSION["cart"][$id]++;

  // echo print_r($_SESSION["cart"]);
  header("location:index.php");
 ?>
