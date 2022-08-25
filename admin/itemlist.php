<?php
include "connect.php";
$qry = "select * from item";
$res = mysqli_query($db, $qry);
$no = 0;
foreach ($res as $item) {
    $no = $no++;
    $name = $item['itemname'];
    $price = $item['price'];
    $color = $item['color'];
    $cpu = $item['cpu'];
    $ram = $item['ram'];
    $bat = $item['battery'];
    $feature = $item['feature'];
    $camera = $item['camera'];
    $size = $item['size'];
    $storage = $item['storage'];
    $resolution = $item['resolution'];
    $os = $item['os'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
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
                        <a class="nav-link active" href="itemlist.php">Item List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="brandlist.php">Brand List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Order</a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Brandid</th>
                        <th scope="col">Price</th>
                        <th scope="col">Color</th>
                        <th scope="col">Cpu</th>
                        <th scope="col">Ram</th>
                        <th scope="col">Battery</th>
                        <th scope="col">Feature</th>
                        <th scope="col">Camera</th>
                        <th scope="col">Size</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Resolution</th>
                        <th scope="col">Os</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                $qry = "select * from item";
                $res = mysqli_query($db, $qry);
                $no = '';
                foreach ($res as $item) {
                    $no++;
                    $iid = $item['itemid'];
                    $name = $item['itemname'];
                    $brand = $item['brandid'];
                    $price = $item['price'];
                    $color = $item['color'];
                    $cpu = $item['cpu'];
                    $ram = $item['ram'];
                    $bat = $item['battery'];
                    $feature = $item['feature'];
                    $camera = $item['camera'];
                    $size = $item['size'];
                    $storage = $item['storage'];
                    $resolution = $item['resolution'];
                    $os = $item['os'];
                    $image = $item['image'];
                ?>
                    <tr style="text-align: center; color: wheat">
                        <td scope="col"><?php echo $no ?></td>
                        <td scope="col"><?php echo $name ?></td>
                        <td scope="col"><?php echo $brand ?></td>
                        <td scope="col"><?php echo $price ?></td>
                        <td scope="col"><?php echo $color ?></td>
                        <td scope="col"><?php echo $cpu ?></td>
                        <td scope="col"><?php echo $ram ?></td>
                        <td scope="col"><?php echo $bat ?></td>
                        <td scope="col"><?php echo $feature ?></td>
                        <td scope="col"><?php echo $camera ?></td>
                        <td scope="col"><?php echo $size ?></td>
                        <td scope="col"><?php echo $storage ?></td>
                        <td scope="col"><?php echo $resolution ?></td>
                        <td scope="col"><?php echo $os ?></td>
                        <td scope="col" style="width: 200px">
                            <span>
                                <a class="text-decoration-none btn btn-sm btn-primary text-white"  href="itemupdate.php?id=<?php echo $iid ?>&action=edit"><i class="mdi mdi-cloud-download"></i> Edit</a>
                                <a class="btn btn-sm btn-danger text-decoration-none text-white" href="itemlist.php?id=<?php echo $iid ?>&action=delete"><i class="fa fa-trash"></i> Delete</a>
                            </span>
                        </td>

                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>


    <footer class="footer">
        <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
            </span>
        </div>
    </footer>
    </div>
</body>

</html>
<?php
if (isset($_GET['action']) && $_GET['action'] == "delete") {
    $id = $_GET['id'];
    $sql = "delete from item where itemid=$id";
    $res = mysqli_query($db, $sql);
    if ($res) {
        echo "<script>window.alert('Item deleted successfully')</script>";
        echo "<script>window.location.href='itemlist.php'</script>";
    }
}
?>