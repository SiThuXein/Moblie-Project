<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
  <link rel="stylesheet" href="../bs/bootstrap.css">
  <script src="../bs/jquery.js"></script>
  <script src="../bs/bootstrap.js"></script>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
  <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/shared/style.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/demo_1/style.css">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body class="bg-dark">
  <div class="container-scroller bg-dark">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <h3 class="text-white ml-5">Mobile Sale<span class="badge badge-secondary ml-2">Project</span></h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" style="width: 230px" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">Admin</p>

              </div>
            </a>
          </li>
          <li class="nav-item nav-category">Main Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="itemlist.php">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Item List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="itemadd.php">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">Item Add</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="brandlist.php">
              <i class="menu-icon typcn typcn-th-large-outline"></i>
              <span class="menu-title">Brand List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="brandadd.php">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">Brand Insert</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.php">
              <i class="menu-icon typcn typcn-bell"></i>
              <span class="menu-title">Help</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="card-columns px-4 mt-3">
          <div class="card">

            <div class="card-body bg-dark">
              <h2 class="card-title badge badge-primary text-white w-25">Item List</h2>
              <p class="card-text text-white">Listing of all products that we sold. Moreover, the specifications and details about our products here.</p>
              <a href="itemlist.php" class="btn btn-sm btn-primary">Detail Listing</a>
            </div>
          </div>
          <div class="card">

            <div class="card-body bg-dark">
              <h2 class="card-title badge badge-primary text-white">Items Adding</h2>
              <p class="card-text text-white">Admin can add new products and detail specifications of each. </p>
              <a href="itemadd.php" class="btn btn-sm btn-primary">Add items here!</a>
              <p class="card-text pt-1"><small class="text-muted">Dont'forget to add every new products.</small></p>
            </div>
          </div>
          <!-- <div class="card text-center bg-dark">
            <div class="card-body">
              <h5 class="card-title badge badge-danger text-white">Attention Please!</h5>
              <p class="card-text text-white">Please remind that items can be only edited via <a class="text-danger" href="itemlist.php"> Items List </a>
                and <a class="text-danger" href="brandlist.php"> Brands List</a> .
              </p>
              <p class="card-text"><small class="text-muted">Last updated at <?php echo date("d-m-Y") ?></small></p>
            </div>
          </div> -->
          <div class="card">

            <div class="card-body bg-dark">
              <h2 class="card-title badge badge-success text-dark">Brands List</h2>
              <p class="card-text text-white">Admin can add new smart phone brands that come into market or something else.</p>
              <a href="brandlist.php" class="btn btn-sm btn-success text-dark">Detail Listing</a>
              <p class="card-text pt-1"><small class="text-muted">Dont'forget to add new brand from our web.</small></p>
            </div>
          </div>
          <div class="card">

            <div class="card-body bg-dark">
              <h2 class="card-title badge badge-success text-dark">Brands Adding</h2>
              <p class="card-text text-white">Admin can add new products and detail specifications of each. </p>
              <a href="brandadd.php" class="btn btn-sm btn-success text-dark">Add Brands here!</a>
              <p class="card-text pt-1"><small class="text-muted">Dont'forget to add every new brands.</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body bg-dark">
              <h2 class="card-title badge badge-warning text-dark">Orders</h2>
              <p class="card-text text-white">Admin can add new products and detail specifications of each. </p>
              <a href="order.php" class="btn btn-sm btn-warning text-dark">Orders Details</a>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer bg-dark">
          <div class="container-fluid">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right text-white d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->

  <!-- End custom js for this page-->
</body>

</html>