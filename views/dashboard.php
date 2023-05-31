<?php

include('models/m_pasien.php');

$conn = mysqli_connect("localhost", "root", "", "health_care");

$data_pasien = mysqli_query($conn,"SELECT * FROM tb_pasien");
$jumlah_pasien = mysqli_num_rows($data_pasien);

?>
<!-- content -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-user-injured opacity-10"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize"><a href="?page=pasien">Jumlah Pasien</a></p>
                        <h4 class="mb-0"> <a href="?page=pasien"><?= $jumlah_pasien?></a></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>2 hari terakhir</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 "><a href="?page=diagnosa">Diagram Analisa Penyakit</a> </h6>
                    <p class="text-sm ">berdasarkan jumlah pasien</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm"> updated 2 days ago </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 "><a href="?page=kontrol">Diagram Check Up</a> </h6>
                    <p class="text-sm ">berdasarkan jumlah pasien</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm"> updated 4 min ago </p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        

</div>


