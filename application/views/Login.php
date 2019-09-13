<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-Tracker Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <style type="text/css">
   body { background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo base_url('images/bg_telkom.jpg'); ?>) !important;
   background-size: cover; background-position: 50% 25%;
   } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
</style>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Welcome to E-Tracker</div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url('Login/aksi_login'); ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" name="username" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            
             <button class="btn btn-primary btn-block" type="submit">Sign into your account</button>
         <!--  <a class="btn btn-primary btn-block" href=<?php echo base_url('Login/aksi_login');?> type="submit">Login</a> -->
        </form>
        
        <img align='middle' class="col-md-12" src="<?php echo base_url('images/logo_telkom.png'); ?>">

          </div>
         
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
