<?php

require "models/m_pasien.php";
$conn = mysqli_connect("localhost", "root", "", "health_care");

$psn = new Pasien($connection);

$id = $_GET["id"];

// Query data pasien
$kh = query("SELECT * from kontrol_harian WHERE id = $id")[0];



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
                                <label for="karbo" class="form-label font-weight-bold">Karbohidrat</label>
                                <input type="text" name="karbo" id="karbo" class="form-control bg-light text-center" value="<?= $kh["karbo"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="protein" class="form-label font-weight-bold">Protein</label>
                                <input type="text" name="protein" id="protein" class="form-control bg-light text-center" value="<?= $kh["protein"]; ?>" readonly>   
                            </div>
                            
                            <div class="form-group">
                                <label for="gula" class="form-label font-weight-bold">Gula</label>
                                <input type="text" name="gula" id="gula" class="form-control bg-light text-center" value="<?= $kh["gula"]; ?>"readonly>   
                            </div>

                            <div class="form-group">
                                <label for="garam" class="form-label font-weight-bold">Garam</label>
                                <input type="text" name="garam" id="garam" class="form-control bg-light text-center" value="<?= $kh["garam"]; ?>" readonly>   
                            </div>
                          
                        </div>  

                        <div class="col-md-4">
                            

                            <div class="form-group">
                                <label for="mandi" class="form-label font-weight-bold">Mandi</label>
                                <input type="text" name="mandi" id="mandi" class="form-control bg-light text-center" value="<?= $kh["mandi"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="potong_kuku" class="form-label font-weight-bold">Potong Kuku</label>
                                <input type="text" name="potong_kuku" id="potong_kuku" class="form-control bg-light text-center" value="<?= $kh["potong_kuku"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="gosok_gigi" class="form-label font-weight-bold">Gook Gigi</label>
                                <input type="text" name="gosok_gigi" id="gosok_gigi" class="form-control bg-light text-center" value="<?= $kh["gosok_gigi"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="memakai_sabun" class="form-label font-weight-bold">Memakai Sabun</label>
                                <input type="text" name="memakai_sabun" id="memakai_sabun" class="form-control bg-light text-center" value="<?= $kh["memakai_sabun"]; ?>" readonly>   
                            </div>


                            
                        </div>   

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="obat" class="form-label font-weight-bold">Obat</label>
                                <input type="text" name="obat" id="obat" class="form-control bg-light text-center" value="<?= $kh["obat"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="nama_obat" class="form-label font-weight-bold">Nama Obat</label>
                                <input type="text" name="nama_obat" id="nama_obat" class="form-control bg-light text-center" value="<?= $kh["nama_obat"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="intensitas" class="form-label font-weight-bold">Intensitas</label>
                                <input type="text" name="intensitas" id="intensitas" class="form-control bg-light text-center" value="<?= $kh["intensitas"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="kerapian" class="form-label font-weight-bold">Kerapian</label>
                                <input type="text" name="kerapian" id="kerapian" class="form-control bg-light text-center" value="<?= $kh["kerapian"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="merokok" class="form-label font-weight-bold">Merokok</label>
                                <input type="text" name="merokok" id="merokok" class="form-control bg-light text-center" value="<?= $kh["merokok"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="merokok" class="form-label font-weight-bold">Jumlah Merokok</label>
                                <input type="text" name="merokok" id="merokok" class="form-control bg-light text-center" value="<?= $kh["merokok"]; ?>" readonly>   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lainnya" class="form-label font-weight-bold">Lainnya</label>
                                <input type="text" name="lainnya" id="lainnya" class="form-control bg-light text-center" value="<?= $kh["lainnya"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="aktivitas" class="form-label font-weight-bold">Aktivitas</label>
                                <input type="text" name="aktivitas" id="aktivitas" class="form-control bg-light text-center" value="<?= $kh["aktivitas"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="jenis_aktivitas" class="form-label font-weight-bold">Jenis Aktivitas</label>
                                <input type="text" name="jenis_aktivitas" id="jenis_aktivitas" class="form-control bg-light text-center" value="<?= $kh["jenis_aktivitas"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="durasi" class="form-label font-weight-bold">Durasi</label>
                                <input type="text" name="durasi" id="durasi" class="form-control bg-light text-center" value="<?= $kh["durasi"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="keluhan" class="form-label font-weight-bold">Keluhan</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control bg-light text-center" value="<?= $kh["keluhan"]; ?>" readonly>   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sayur" class="form-label font-weight-bold">Sayur</label>
                                <input type="text" name="sayur" id="sayur" class="form-control bg-light text-center" value="<?= $kh["sayur"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="buah" class="form-label font-weight-bold">Buah</label>
                                <input type="text" name="buah" id="buah" class="form-control bg-light text-center" value="<?= $kh["buah"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="vitamin" class="form-label font-weight-bold">Vitamin</label>
                                <input type="text" name="vitamin" id="vitamin" class="form-control bg-light text-center" value="<?= $kh["vitamin"]; ?>" readonly>   
                            </div>

                        </div>
                    </div>

                </form>
               
            </div>
        </div>
<!-- End Content -->