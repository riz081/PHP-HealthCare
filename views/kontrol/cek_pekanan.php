<?php

require "models/m_pasien.php";
$conn = mysqli_connect("localhost", "root", "", "health_care");

$psn = new Pasien($connection);

$id = $_GET["id"];

// Query data pasien
$kh = query("SELECT * from kontrol_pekanan WHERE id = $id")[0];



?>


<!-- Content -->
<div class="card px-3">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_pasien" class="form-label font-weight-bold">Nama Pasien</label>
                                <input type="text" name="nama_pasien" id="nama_pasien" class="form-control bg-light text-center" value="<?= $kh["nama_pasien"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="tanggal" class="form-label font-weight-bold">Tanggal Check Up</label>
                                <input type="text" name="tanggal" id="tanggal" class="form-control bg-light text-center" value="<?= $kh["tanggal"]; ?>" readonly>   
                            </div>

                            
                            
                        </div>   


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="td" class="form-label font-weight-bold">Tekanan Darah</label>
                                <input type="text" name="td" id="td" class="form-control bg-light text-center" value="<?= $kh["td"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="lp" class="form-label font-weight-bold">Lingkar Perut</label>
                                <input type="text" name="lp" id="lp" class="form-control bg-light text-center" value="<?= $kh["lp"]; ?>" readonly>   
                            </div>
                            

                            <div class="form-group">
                                <label for="bb" class="form-label font-weight-bold">Berat Badan</label>
                                <input type="text" name="bb" id="bb" class="form-control bg-light text-center" value="<?= $kh["bb"]; ?>" readonly>   
                            </div>

                            
                            <div class="form-group">
                                <label for="tb" class="form-label font-weight-bold">Tinggi Badan</label>
                                <input type="text" name="tb" id="tb" class="form-control bg-light text-center" value="<?= $kh["tb"]; ?>" readonly>   
                            </div>
                          
                        </div>  

                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label for="imt" class="form-label font-weight-bold">Indeks Massa Tubuh</label>
                                <input type="text" name="imt" id="imt" class="form-control bg-light text-center" value="<?= $kh["imt"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="gula_darah" class="form-label font-weight-bold">Gula Darah</label>
                                <input type="text" name="gula_darah" id="gula_darah" class="form-control bg-light text-center" value="<?= $kh["gula_darah"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="kolestrol" class="form-label font-weight-bold">Kolestrol</label>
                                <input type="text" name="kolestrol" id="kolestrol" class="form-control bg-light text-center" value="<?= $kh["kolestrol"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="edukasi" class="form-label font-weight-bold">Edukasi</label>
                                <input type="text" name="edukasi" id="edukasi" class="form-control bg-light text-center" value="<?= $kh["edukasi"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="catatan" class="form-label font-weight-bold">Catatan</label>
                                <input type="text" name="catatan" id="catatan" class="form-control bg-light text-center" value="<?= $kh["catatan"]; ?>" readonly>   
                            </div>
                           
                        </div>   

                    </div>

                </form>
               
            </div>
        </div>
<!-- End Content -->