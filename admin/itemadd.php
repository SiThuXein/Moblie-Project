<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bs/bootstrap.css">
    <!-- <script src="../bs/jquery.js"></script>
    <script src="../bs/bootstrap.js"></script> -->
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<?php
if (isset($_POST['btn'])) {
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
    $image = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], 'adimage/' . $_FILES['file']['name']);
    $qry = "insert into item(itemname,brandid,price,color,cpu,ram,battery,feature,camera,size,storage,resolution,os,image)
    values ('$name','$brand','$price','$color','$cpu','$ram','$battery','$feature','$camera','$size','$storage','$resolution','$os','$image')";
    $res = mysqli_query($db, $qry);
    if ($res) {
        echo "<script>window.alert('Record Inserted successfully')</script>";
        echo "<script>window.location.href='itemadd.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>


<body class="">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light style=" background-color: #e3f2fd;"">
            <h3 class="text-dark ml-5">Mobile Sale<span class="badge badge-secondary ml-2">Project</span></h3>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="itemlist.php">Item List</a>
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
    <div class="row py-4">
        <div class="col align-self-center">
            <h1 class="nav justify-content-center">Add Items Here</h1>
        </div>
    </div>
    <form action="itemadd.php" method="post" enctype="multipart/form-data">
        <div class="row text-info">
            <div class="col-md-4 offset-md-1">
                <div class="form-group">
                    <label class="badge badge-pill badge-info" for="">Itemname</label>
                    <input name="itemname" type="text" class="form-control">
                    <label class="badge badge-pill badge-info" for="">Brand</label>
                    <select class="form-control" name="brand" id="">
                        <?php
                        $sql = 'select * from brand';
                        $res = mysqli_query($db, $sql);
                        //echo $res ? "success" : "fail";x
                        foreach ($res as $item) {
                            $brand = $item['brandname'];
                            $bid = $item['brandid'];
                        ?>
                            <option value="<?php echo $bid ?>"><? echo $brand ?></option>
                        <?php } ?>
                    </select>
                    <label class="badge badge-pill badge-info" for="">Price</label>
                    <input name="price" type="text" class="form-control">
                    <label class="badge badge-pill badge-info" for="">Color</label>
                    <input name="color" type="text" class="form-control">
                    <label class="badge badge-pill badge-info" for="">Cpu</label>
                    <input name="cpu" type="text" class="form-control">
                    <label class="badge badge-pill badge-info" for="">Ram</label>
                    <input name="ram" type="text" class="form-control">
                    <label class="badge badge-pill badge-info" for="">Battery</label>
                    <input name="battery" type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <label class="badge badge-pill badge-info" for="">Feature</label>
                <input name="feature" type="text" class="form-control">
                <label class="badge badge-pill badge-info" for="">Camera</label>
                <input name="camera" type="text" class="form-control">
                <label class="badge badge-pill badge-info" for="">Size</label>
                <input name="size" type="text" class="form-control">
                <label class="badge badge-pill badge-info" for="">Storage</label>
                <input name="storage" type="text" class="form-control">
                <label class="badge badge-pill badge-info" for="">Resolution</label>
                <input name="resolution" type="text" class="form-control">
                <label class="badge badge-pill badge-info" for="">Os</label>
                <input name="os" type="text" class="form-control">
                <label class="badge badge-pill badge-info" for="">Choose Photo</label>
                <input type="file" name="file">
                <button type="submit" name="btn" class="btn btn-outline-success mt-4">Add</button>
            </div>
    </form>
    </div>
</body>


</html>
