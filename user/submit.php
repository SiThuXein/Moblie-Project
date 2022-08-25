
<?php
  session_start();
  include '../admin/connect.php';
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $payment=$_POST['payment'];
  $cardno=$_POST['cardno'];

  $username=$_SESSION["username"];
  $qry="select * from customer where username='$username'";
  $res=mysqli_query($db,$qry);
  foreach($res as $ress){
    $cid=$ress["id"];
  }
  $sql="insert into orders (customerid,date,phone,address,name,payment,cardno,status) values ('$cid',now(),'$phone','$address','$name','$payment','$cardno',0)";
  $order=mysqli_query($db,$sql);
  if(!$order){
    echo "Failed".mysqli_error($db);
  }else{
    $oid=mysqli_insert_id($db);
    foreach($_SESSION['cart'] as $key => $value){
      $price=mysqli_query($db,"select price from item where itemid='$key'");
      while($p=mysqli_fetch_array($price)){
        $price=$p['price'];
      }
      $amt=$price * $value;
      $sql="insert into orderdetails(orderid,itemid,qty,price,amount)";
      $sql.="values ('$oid','$key','$value','$price','$amt')";
      $orderdel=mysqli_query($db,$sql);
      if(!$orderdel){
        echo "Failed2".mysqli_error($db);
      }else{
        $_SESSION["orderid"]=$oid;
        unset($_SESSION['cart']);
        header("location:payment.php");
      }

    }
  }

 ?>
