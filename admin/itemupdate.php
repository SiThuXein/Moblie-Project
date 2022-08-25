<!DOCTYPE html>
<html lang="en">
<?php
include "connect.php";
?>
<?php
$id = $_GET['id'];
$qry = "select * from item where itemid='$id'";
$res = mysqli_query($db, $qry);
$no = '';
foreach ($res as $item) {
    $no++;
    $name = $item['itemname'];
    $obrand = $item['brandid'];
    //echo $obrand;
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
<style >
  label{
    font-size: 15px !important;
    margin-top:5px;
  }
</style>
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
    <div class="row">

        <div class="col-md-4 offset-md-1">
            <form action="" method="POST">
                <div class="form-group">
                    <label class="badge badge-pill badge-info" for="">Itemname</label>
                    <input name="itemname" value="<?php echo $name ?>" type="text" class="form-control">
                    <label class="badge badge-pill badge-info" for="">Brand</label>
                    <select class="form-control" name="brand" value="<?php echo $obrand ?>" id="">
                        <?php
                        $sql = 'select * from brand';
                        $res = mysqli_query($db, $sql);
                        //echo $res ? "success" : "fail";
                        foreach ($res as $b) {
                            $brandid = $b['brandid'];
                            $brandname = $b['brandname'];
                        ?>
                            <option value="<?php echo $brandid ?>"><?php echo $brandname ?></option>
                        <?php } ?>
                    </select>
                    <label for="" class="badge badge-pill badge-info">Price</label>
                    <input name="price" value="<?php echo $price ?>" type="text" class="form-control">
                    <label for="" class="badge badge-pill badge-info">Color</label>
                    <input name="color" value="<?php echo $color ?>" type="text" class="form-control">
                    <label for="" class="badge badge-pill badge-info">Cpu</label>
                    <input name="cpu" value="<?php echo $cpu ?>" type="text" class="form-control">
                    <label for="" class="badge badge-pill badge-info">Ram</label>
                    <input name="ram" value="<?php echo $ram ?>" type="text" class="form-control">
                    <label for="" class="badge badge-pill badge-info">Battery</label>
                    <input name="battery" value="<?php echo $bat ?>" type="text" class="form-control">
                </div>
        </div>
        <div class="col-md-4 offset-md-1">
            <label for="" class="badge badge-pill badge-info">Feature</label>
            <input name="feature" value="<?php echo $feature ?>" type="text" class="form-control">
            <label for="" class="badge badge-pill badge-info">Camera</label>
            <input name="camera" value="<?php echo $camera ?>" type="text" class="form-control">
            <label for="" class="badge badge-pill badge-info">Size</label>
            <input name="size" value="<?php echo $size ?>" type="text" class="form-control">
            <label for="" class="badge badge-pill badge-info">Storage</label>
            <input name="storage" value="<?php echo $storage ?>" type="text" class="form-control">
            <label for="" class="badge badge-pill badge-info">Resolution</label>
            <input name="resolution" value="<?php echo $resolution ?>" type="text" class="form-control">
            <label for="" class="badge badge-pill badge-info" >Os</label>
            <input name="os" value="<?php echo $os ?>" type="text" class="form-control">
            <button type="submit" name="btn" class="btn btn-outline-success mt-4">Update</button>
        </div>
        </form>
    </div>
</body>
<?php
if (isset($_POST["btn"])) {
    $id = $_GET['id'];
    $name = $_POST['itemname'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $cpu = $_POST['cpu'];
    $ram = $_POST['ram'];
    $battery = $_POST['battery'];
    $feature = $_POST['feature'];
    $camera = $_POST['camera'];
    $size = $_POST['size'];
    $storage = $_POST['storage'];
    $resolution = $_POST['resolution'];
    $os = $_POST['os'];
    $sql = "update item set itemname='$name',brandid='$brand',price='$price',color='$color',cpu='$cpu',ram='$ram',battery='$battery',
    feature='$feature',camera='$camera',size='$size',storage='$storage',resolution='$resolution',os='$os' where itemid='$id'";
    $res = mysqli_query($db, $sql);
    if ($res) {
        echo "<script>window.alert('Record Edited')</script>";
        echo "<script>window.location.href='itemlist.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

</html>
