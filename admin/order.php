<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bs/bootstrap.css">
    <link rel="stylesheet" href="../bs/bootstrap.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <h3 class="text-white ml-5">Mobile Sale<span class="badge badge-secondary ml-2">Project</span></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="itemlist.php">Item List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="brandlist.php">Brand List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="order.php">Order</a>
                    </li>
                    <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.php">Help</a>
          </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid justify-content-center">
        <div class="mt-4">
            <table class="table">
                <thead class="thead-dark">
                    <tr style="text-align: center; color: wheat" class="font-weight-bolder bg-dark">
                        <th scope="col">No</th>
                        <th scope="col">OrderId</th>
                        <th scope="col">Item</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                        <th scope="col">CustomerId</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Name</th>
                        <th scope="col">Payment</th>
                        <th scope="col">CardNo</th>
                        <th scope="col">Status</th>

                    </tr>
                    <?php
                    $no = 0;
                    $sql = "select * from orders";
                    $res = mysqli_query($db, $sql);
                    foreach ($res as $item) {
                        $no++;
                        $orderid = $item['orderid'];
                        $date = $item['date'];
                        $cusid = $item['customerid'];
                        $phone = $item['phone'];
                        $address = $item['address'];
                        $name = $item['name'];
                        $pay = $item['payment'];
                        $card = $item['cardno'];
                        $status = $item['status'];
                        /*$orderid = $item['orderid'];
                        $itemid = $item['itemid'];
                        $qty = $item['qty'];
                        $price = $item['price'];
                        $amount = $item['amount'];*/
                        $sq = "select * from orderdetails where orderid='$orderid'";
                        $r = mysqli_query($db, $sq);
                        foreach ($r as $item) {
                            //$orderid = $item['orderid'];
                            $itemid = $item['itemid'];
                        }
                    ?>
                        <tr style="text-align: center; color: wheat">
                            <td><?php echo $no ?></td>
                            <td><?php echo $orderid ?></td>
                            <td>
                                <?php
                                $sql = "select * from orderdetails where orderid='$orderid'";
                                $res = mysqli_query($db, $sql);
                                foreach ($res as $it) {
                                    $itemid = $it['itemid'];

                                    $s = "select * from item where itemid='$itemid'";
                                    $r = mysqli_query($db, $s);
                                    foreach ($r as $i) {
                                        $iname = $i['itemname'];

                                ?>
                                        <ul style="list-style: none">
                                            <li><?php echo $iname ?></li>
                                        </ul>
                                    <?php } ?>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                $sql = "select * from orderdetails where orderid='$orderid'";
                                $res = mysqli_query($db, $sql);
                                foreach ($res as $it) {
                                    $qty = $it['qty'];
                                ?>
                                    <ul style="list-style: none">
                                        <li><?php echo $qty ?></li>
                                    </ul>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                $sql = "select * from orderdetails where orderid='$orderid'";
                                $res = mysqli_query($db, $sql);
                                foreach ($res as $it) {
                                    $price = $it['price'];
                                ?>
                                    <ul style="list-style: none">
                                        <li><?php echo $price ?></li>
                                    </ul>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                $sql = "select * from orderdetails where orderid='$orderid'";
                                $res = mysqli_query($db, $sql);
                                foreach ($res as $it) {
                                    $amt = $it['amount'];
                                ?>
                                    <ul style="list-style: none">
                                        <li><?php echo $amt ?></li>
                                    </ul>
                                <?php } ?>
                            </td>
                            <td><?php echo $date ?></td>
                            <td><?php echo $cusid ?></td>
                            <td><?php echo $phone ?></td>
                            <td><?php echo $address ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $pay ?></td>
                            <td><?php echo $card ?></td>
                            <td><?php echo $status ?></td>


                        </tr>
                    <?php } ?>
                </thead>
            </table>
        </div>
    </div>
</body>

</html>
