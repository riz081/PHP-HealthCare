<?php


require "models/m_pasien.php";
$conn = mysqli_connect("localhost", "root", "", "health_care");

$psn = new Pasien($connection);

$id = $_GET["id"];

// Query data pasien
$ps = query("SELECT * from tb_pasien WHERE id_pasien = $id")[0];

?>


<!-- Content -->
<div class="card px-3">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_lengkap" class="form-label font-weight-bold">Nama Lengkap</label>
                                <input type="hidden" name="id_pasien" value="<?= $ps["id_pasien"]; ?>" required>  
                                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" class="form-control bg-light text-center" value="<?= $ps["nama_lengkap"]; ?>" required>   
                            </div>

                            
                            <div class="form-group">
                                <label for="alamat" class="form-label font-weight-bold">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control bg-light text-center" value="<?= $ps["alamat"]; ?>" required>   
                            </div>    


                            <div class="form-group">
                                <label for="usia" class="form-label font-weight-bold">Usia</label>
                                <input type="number" name="usia" id="usia" placeholder="Usia" class="form-control bg-light text-center" value="<?= $ps["usia"]; ?>" required>   
                            </div>    


                            <div class="form-group">
                                <label for="status" class="form-label font-weight-bold">Status</label>
                                <input type="text" name="status" id="status" placeholder="Status" class="form-control bg-light text-center" value="<?= $ps["status"]; ?>" required>   
                            </div>                  
                            
                        </div>   

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label font-weight-bold">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control bg-light text-center" value="<?= $ps["jenis_kelamin"]; ?>" required>   
                            </div>

                            <div class="form-group">
                                <label for="agama" class="form-label font-weight-bold">Agama</label>
                                <input type="text" name="agama" id="agama" placeholder="Agama" class="form-control bg-light text-center" value="<?= $ps["agama"]; ?>" required>   
                            </div>


                            <div class="form-group">
                                <label for="no_hp" class="form-label font-weight-bold">Nomor Handphone</label>
                                <input type="number" name="no_hp" id="no_hp" placeholder="Nomor Handphone" class="form-control bg-light text-center" value="<?= $ps["no_hp"]; ?>" required>   
                            </div>


                            <div class="form-group">
                                <label for="foto" class="form-label font-weight-bold">Passfoto</label>
                            </div>
                            <div class="form-group">
                                <img src="assets/img/foto/<?php echo $ps["foto"];?>" class="avatar avatar-xxl me-3 border-radius-lg" alt="user1">
                            </div>
                        </div>
                    </div>

                </form>
               
            </div>
        </div>
<!-- End Content -->