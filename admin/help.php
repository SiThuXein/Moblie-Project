<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
                            <th scope="col">Email</th>
                            <th scope="col">Query</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "select * from help";
                        $res = mysqli_query($con, $sql);
                        $no = '';
                        foreach ($res as $item) {
                            $id = $item['id'];
                            $email = $item['email'];
                            $message = $item['query'];
                            $no++;

                        ?>
                            <tr style="text-align: center; color: wheat">
                                <td><?php echo $no ?></td>
                                <td><?php echo $email ?></td>
                                <td><?php echo $message ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm text-decoration-none"> <a class="text-decoration-none text-white" href="help.php?id=<?php echo $id ?>&action=delete"><i class="fa fa-trash"></i> Delete</a></button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php
if (isset($_GET["action"]) && $_GET["action"]=="delete") {
    $id=$_GET["id"];
    $sql = "delete from help  where id='$id'";
    $res = mysqli_query($db, $sql);
    if ($res) {
        echo "<script>window.alert('Query has been deleted successfully!')</script>";
        echo "<script>window.location.href='help.php'</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
</html>
