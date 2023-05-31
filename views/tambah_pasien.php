<?php


include "models/m_pasien.php";

$psn = new Pasien($connection);
?>


<!-- Content -->
<div class="card px-3">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_lengkap" class="form-label font-weight-bold">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" class="form-control bg-light text-center" required>   
                            </div>

                            
                            <div class="form-group">
                                <label for="alamat" class="form-label font-weight-bold">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control bg-light text-center" required>   
                            </div>    


                            <div class="form-group">
                                <label for="usia" class="form-label font-weight-bold">Usia</label>
                                <input type="number" name="usia" id="usia" placeholder="Usia" class="form-control bg-light text-center" required>   
                            </div>    


                            <div class="form-group">
                                <label for="status" class="form-label font-weight-bold">Status</label>
                                <input type="text" name="status" id="status" placeholder="Status" class="form-control bg-light text-center" required>   
                            </div>                  
                            
                        </div>   

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label font-weight-bold">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control bg-light text-center" required>   
                            </div>

                            <div class="form-group">
                                <label for="agama" class="form-label font-weight-bold">Agama</label>
                                <input type="text" name="agama" id="agama" placeholder="Agama" class="form-control bg-light text-center" required>   
                            </div>


                            <div class="form-group">
                                <label for="no_hp" class="form-label font-weight-bold">Nomor Handphone</label>
                                <input type="number" name="no_hp" id="no_hp" placeholder="Nomor Handphone" class="form-control bg-light text-center" required>   
                            </div>


                            <div class="form-group">
                                <label for="foto" class="form-label font-weight-bold">Passfoto</label>
                                <input type="file" name="foto" id="foto" placeholder="Passfoto" class="form-control bg-light text-center" required>   
                            </div>

                            <input type="submit" name="tambah" value="Simpan" class="   btn btn-success mt-4">
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>

                </form>

                <?php
                    if(@$_POST['tambah']) {
                        $nama_lengkap = $connection->conn->real_escape_string($_POST['nama_lengkap']);

                        $alamat = $connection->conn->real_escape_string($_POST['alamat']);

                        $usia = $connection->conn->real_escape_string($_POST['usia']);

                        $jenis_kelamin = $connection->conn->real_escape_string($_POST['jenis_kelamin']);

                        $status = $connection->conn->real_escape_string($_POST['status']);

                        $agama = $connection->conn->real_escape_string($_POST['agama']);

                        $no_hp = $connection->conn->real_escape_string($_POST['no_hp']);


                        $extensi = explode(".", $_FILES['foto']['name']);
                        $foto = "psn-".round(microtime(true)).".".end($extensi);
                        $sumber = $_FILES['foto']['tmp_name'];
                        $upload = move_uploaded_file($sumber, "assets/img/foto/".$foto);
                        if($upload) {
                            $psn->tambah($nama_lengkap, $alamat, $usia, $jenis_kelamin, $status, $agama, $no_hp, $foto);
                            header("location: ?page=pasien");
                        } else {
                            echo "<script>alert('Foto gagal diupload!')</script>";
                        }


                    }
                ?>
            </div>
        </div>
<!-- End Content -->