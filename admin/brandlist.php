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
                        <a class="nav-link  active" href="brandlist.php">Brand List</a>
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
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-md-4 offset-md-4">
                <table class="table">
                    <thead class="thead-dark">
                        <tr style="text-align: center">
                            <th scope="col">No</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from brand";
                        $res = mysqli_query($db, $sql);
                        $no = '';
                        foreach ($res as $item) {
                            $id = $item['brandid'];
                            $brandname = $item['brandname'];
                            $no++;

                        ?>
                            <tr style="text-align: center; color: wheat">
                                <td><?php echo $no ?></td>
                                <td><?php echo $brandname ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm text-decoration-none"> <a class="text-decoration-none text-white" href="brandupdate.php?id=<?php echo $id ?>&action=edit"><i class="mdi mdi-cloud-download"></i> Edit</a></button>
                                    <button type="button" class="btn btn-danger btn-sm text-decoration-none"> <a class="text-decoration-none text-white" href="brandlist.php?id=<?php echo $id ?>&action=delete"><i class="fa fa-trash"></i> Delete</a></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
        $id = $_GET['id'];
        $sql = "delete from brand where brandid='$id'";
        $res = mysqli_query($db, $sql);
        if ($res) {
            echo "<script>window.alert('Brand has been deleted successfully')</script>";
            echo "<script>window.location.href='brandlist.php'</script>";
        }
    }
    ?>
</body>

</html>
