<?php require_once "../include/db.php";
  ob_start();
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .field-icon{
      float: right;
      margin-left: 60px;
      margin-top: -30px;
      margin-right:15px;;
      position: relative;
      z-index: 2;
    }
    .container{
      padding-top: 40px;
      margin:auto;
    }
  </style>
</head>
<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6 col-xl-10  col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0" style="width: 100%; height: 100%;">
           
            <!-- Nested Row within Card Body -->
            <div class="row " style="">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5"  >
                  <div class="text-center" >
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  
                    <form class="user form-horizontal" action="../include/login_page.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name ='username' aria-describedby="emailHelp" placeholder="Enter User Name" style="text-decoration-color: black">                    </div>
                    <div class="form-group">
                      <input id="password_field" type="password" class="form-control form-control-user"  placeholder="Password" name='password'>
                      <span toggle="#password_field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                    </div>
                    <span class="input-group-btn">
                                <button class="btn btn-primary btn-user btn-block" type="submit" name="login">
                                    Login
                                </button>
                            </span>
                    <hr>
                  </form>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> -->  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    $(".toggle-password").click(function(){
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input=$($(this).attr("toggle"));
      if(input.attr("type")=="password"){
        input.attr("type","text");
      }else{
        input.attr("type","password");
      }
    });
  </script>
</body>
</html>
