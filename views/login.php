<?php

include '../models/m_user.php';

session_start();

// cek cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username by id
  $result = mysqli_query($conn, "SELECT * username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if( $key === hash('sha256', $row['username']) ) {
    $_SESSION['login'] = true;
  }
}


if( isset($_SESSION["login"])) {
  header("location: ../index.php");
  exit();
}


if ( isset($_POST["login"]) ) {
  
  $username = $_POST["username"];
  $password = $_POST["password"];


  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  // cek username

  if( mysqli_num_rows($result) == 1){

    // cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])) {

      // set session
      $_SESSION["login"] = true;

      // cek rememberme / cookies
      if ( isset($_POST['remember']) ) {

        // create cookies

        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("location: ../index.php");
      exit;
    }
  }

  $error = true;
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/health.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="bg-gray-200">
 
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://plus.unsplash.com/premium_photo-1661281397737-9b5d75b52beb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>

                  <!-- icon -->
                  <div class="row mt-3">
                    <div class="col-2 text-center ms-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-facebook text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center px-1">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-github text-white text-lg"></i>
                      </a>
                    </div>
                    <div class="col-2 text-center me-auto">
                      <a class="btn btn-link px-3" href="javascript:;">
                        <i class="fa fa-google text-white text-lg"></i>
                      </a>
                    </div>
                  </div>

                </div>
              </div>

              <?php if( isset($error)) : ?>
                <p class="text-center mt-4" style="color: red; font-style: italic;">Username / Password Salah!</p>
              <?php endif?>

              <!-- Form -->
              <div class="card-body">
                <form class="text-start" action="" method="post">
                  <div class="input-group input-group-outline mb-4">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                  </div>

                  <!-- Remember Me / Cookies -->
                  <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember" checked>
                    <label class="form-check-label mb-0 ms-3" for="remember">Remember me</label>
                  </div>


                  <div class="text-center">
                    <button type="submit" name="login" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
                  </div>
                  <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="registrasi.php" class="text-primary text-gradient font-weight-bold">Register</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>