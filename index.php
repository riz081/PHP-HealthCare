<?php

session_start();
// cek session
if( !isset($_SESSION["login"]) ) {
  header("location: views/login.php");
  exit();
}

ob_start();
require_once('config/+koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database);



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/health.png">
  <title>
    <?php echo $_GET['page']?>
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">

      <a class="navbar-brand m-0">
        <img src="assets/img/health.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Health Care</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Menu pages</h6>
        </li>

        <li class="nav-item ">
          <a class="nav-link text-white <?php if (@$_GET['page'] == 'dashboard') {
                                            echo 'active bg-primary';
                                        } ?>" href="?page=dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (@$_GET['page'] == 'pasien') {
                                            echo 'active bg-primary';
                                        } ?>" href="?page=pasien">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">personal_injury</i>
            </div>
            <span class="nav-link-text ms-1">Pasien</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (@$_GET['page'] == 'diagnosa') {
                                            echo 'active bg-primary';
                                        } ?>" href="?page=diagnosa">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Diagnosa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php if (@$_GET['page'] == 'kontrol') {
                                            echo 'active bg-primary';
                                        } ?>" href="?page=kontrol">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">monitor_heart</i>
            </div>
            <span class="nav-link-text ms-1">Check Up</span>
          </a>
        </li>

      </ul>

    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


    <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">

      <div class="container-fluid py-1 px-2">

          <nav aria-label="breadcrumb ">
              <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="?page=dashboard">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark text-capitalize active" aria-current="page"><?php echo $_GET['page']?></li>
              </ol>
              <h6 class="font-weight-bolder mb-0 text-uppercase"><?php echo $_GET['page']?></h6>
          </nav>

          <div id=" navbar">
              <ul class="navbar-nav  justify-content-end">
                  
                  <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-user cursor-pointer"></i>
                      <span class="d-sm-inline d-none">Hello, <b>Budi</b></span>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                      <li class="mb-2">
                        <a class="dropdown-item border-radius-md" href="views/logout.php">
                          <div class="d-flex py-1">
                            <div class="my-auto">
                              <i class="fa fa-sign-out me-sm-1">                                        
                              </i>
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="text-sm font-weight-normal mb-1">                                
                                  <span class="font-weight-bold">Sign Out</span>
                              </h6>                              
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
              </ul>
          </div>

      </div>

  </nav>
  <!-- End Navbar -->



    <!-- Content -->
    <?php

    if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
      include "views/dashboard.php";
    } else if (@$_GET['page'] == 'pasien') {
      include "views/pasien.php";
    } else if (@$_GET['page'] == 'tambah_pasien') {
      include "views/tambah_pasien.php";
    } else if (@$_GET['page'] == 'edit_pasien') {
      include "views/edit_pasien.php";
    } else if (@$_GET['page'] == 'view_pasien') {
      include "views/view_pasien.php";
    } else if (@$_GET['page'] == 'diagnosa') {
      include "views/diagnosa/diagnosa.php";
    } else if (@$_GET['page'] == 'covid19') {
      include "views/diagnosa/covid19.php";
    } else if (@$_GET['page'] == 'pasien_covid') {
      include "views/diagnosa/pasien_covid.php";
    } else if (@$_GET['page'] == 'cek_covid') {
      include "views/diagnosa/cek_covid.php";
    } else if (@$_GET['page'] == 'demam') {
      include "views/diagnosa/demam.php";
    } else if (@$_GET['page'] == 'pasien_demam') {
      include "views/diagnosa/pasien_demam.php";
    } else if (@$_GET['page'] == 'cek_demam') {
      include "views/diagnosa/cek_demam.php";
    } else if (@$_GET['page'] == 'diabetes') {
      include "views/diagnosa/diabetes.php";
    } else if (@$_GET['page'] == 'pasien_diabetes') {
      include "views/diagnosa/pasien_diabetes.php";
    } else if (@$_GET['page'] == 'cek_diabetes') {
      include "views/diagnosa/cek_diabetes.php";
    } else if (@$_GET['page'] == 'kontrol') {
      include "views/kontrol/kontrol.php";
    } else if (@$_GET['page'] == 'harian') {
      include "views/kontrol/harian.php";
    } else if (@$_GET['page'] == 'kontrol_harian') {
      include "views/kontrol/kontrol_harian.php";
    } else if (@$_GET['page'] == 'cek_harian') {
      include "views/kontrol/cek_harian.php";
    } else if (@$_GET['page'] == 'pekanan') {
      include "views/kontrol/pekanan.php";
    } else if (@$_GET['page'] == 'kontrol_pekanan') {
      include "views/kontrol/kontrol_pekanan.php";
    } else if (@$_GET['page'] == 'cek_pekanan') {
      include "views/kontrol/cek_pekanan.php";
    } else if (@$_GET['page'] == 'jadwal') {
      include "views/jadwal/jadwal.php";
    } else if (@$_GET['page'] == 'atur_jadwal') {
      include "views/jadwal/atur_jadwal.php";
    } else if (@$_GET['page'] == 'agenda') {
      include "views/jadwal/agenda.php";
    }

    ?>

  </main>

  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Covid 19", "DBD", "Diabetes"],
        datasets: [{
          label: "",
          data : [
          <?php
          $conn = mysqli_connect("localhost", "root", "", "health_care");

          $jumlah_covid = mysqli_query($conn,"select * from covid where hasil='Terpapar Covid 19'");
          echo mysqli_num_rows($jumlah_covid);
          ?>,

          <?php
          $conn = mysqli_connect("localhost", "root", "", "health_care");

          $jumlah_demam = mysqli_query($conn,"select * from demam where hasil='Mengalami demam berdarah'");
          echo mysqli_num_rows($jumlah_demam);
          ?>,

          <?php
          $conn = mysqli_connect("localhost", "root", "", "health_care");

          $jumlah_diabetes = mysqli_query($conn,"select * from diabetes where hasil='Diabetes'");
          echo mysqli_num_rows($jumlah_diabetes);
          ?>

          ],
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Covid 19", "DBD", "Diabetes"],
        datasets: [{
          label: "",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [
            <?php
            $conn = mysqli_connect("localhost", "root", "", "health_care");

            $jumlah_covid = mysqli_query($conn,"select tanggal_cvd from covid where hasil='Terpapar Covid 19'");
            echo mysqli_num_rows($jumlah_covid);
            ?>,

            <?php
            $conn = mysqli_connect("localhost", "root", "", "health_care");

            $jumlah_demam = mysqli_query($conn,"select * from demam where hasil='Mengalami demam berdarah'");
            echo mysqli_num_rows($jumlah_demam);
            ?>,

            <?php
            $conn = mysqli_connect("localhost", "root", "", "health_care");

            $jumlah_diabetes = mysqli_query($conn,"select * from diabetes where hasil='Diabetes'");
            echo mysqli_num_rows($jumlah_diabetes);
            ?>
          ],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
  <script src="assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>