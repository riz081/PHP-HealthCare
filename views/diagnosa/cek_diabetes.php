<?php

require "models/m_pasien.php";
$conn = mysqli_connect("localhost", "root", "", "health_care");

$psn = new Pasien($connection);

$id = $_GET["id"];

// Query data pasien
$cv = query("SELECT * from diabetes WHERE id = $id")[0];



?>


<!-- Content -->
<div class="card px-3">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_pasien" class="form-label font-weight-bold">Nama Pasien</label>
                                <input type="text" name="nama_pasien" id="nama_pasien" class="form-control bg-light text-center" value="<?= $cv["nama_pasien"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="hasil" class="form-label font-weight-bold">Hasil Diagnosa</label>
                                <input type="text" name="hasil" id="hasil" class="form-control bg-light text-center" value="<?= $cv["hasil"]; ?>" readonly>   
                            </div>

                            <div class="form-group">
                                <label for="tanggal_gd" class="form-label font-weight-bold">Tanggal Periksa</label>
                                <input type="text" name="tanggal_gd" id="tanggal_gd" class="form-control bg-light text-center" value="<?= $cv["tanggal_gd"]; ?>" readonly>   
                            </div>
                            
                        </div>   


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Q1" class="form-label font-weight-bold">Pertanyaan 1</label>
                                <input type="text" name="Q1" id="Q1" class="form-control bg-light text-center" value="
                                	<?php
                                        if ($cv["Q1"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q2" class="form-label font-weight-bold">Pertanyaan 2</label>
                                <input type="text" name="Q2" id="Q2" class="form-control bg-light text-center" value="
                                	<?php
                                        if ($cv["Q2"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q3" class="form-label font-weight-bold">Pertanyaan 3</label>
                                <input type="text" name="Q3" id="Q3" class="form-control bg-light text-center" value="
                                	<?php
                                        if ($cv["Q3"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q4" class="form-label font-weight-bold">Pertanyaan 4</label>
                                <input type="text" name="Q4" id="Q4" class="form-control bg-light text-center" value="
                                	<?php
                                        if ($cv["Q4"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q5" class="form-label font-weight-bold">Pertanyaan 5</label>
                                <input type="text" name="Q5" id="Q5" class="form-control bg-light text-center" value="
                                    <?php
                                        if ($cv["Q5"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>
                          
                        </div>  

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Q6" class="form-label font-weight-bold">Pertanyaan 6</label>
                                <input type="text" name="Q6" id="Q6" class="form-control bg-light text-center" value="
                                    <?php
                                        if ($cv["Q6"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q7" class="form-label font-weight-bold">Pertanyaan 7</label>
                                <input type="text" name="Q7" id="Q7" class="form-control bg-light text-center" value="
                                    <?php
                                        if ($cv["Q7"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q8" class="form-label font-weight-bold">Pertanyaan 8</label>
                                <input type="text" name="Q8" id="Q8" class="form-control bg-light text-center" value="
                                    <?php
                                        if ($cv["Q8"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q9" class="form-label font-weight-bold">Pertanyaan 9</label>
                                <input type="text" name="Q9" id="Q9" class="form-control bg-light text-center" value="
                                    <?php
                                        if ($cv["Q9"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="Q10" class="form-label font-weight-bold">Pertanyaan 10</label>
                                <input type="text" name="Q10" id="Q10" class="form-control bg-light text-center" value="
                                    <?php
                                        if ($cv["Q10"] == "1") {
                                            echo "Salah";
                                        } else {
                                            echo "Benar";
                                        }
                                    ?>
                                " readonly>   
                            </div>

                            <div class="form-group">
                                <label for="jml_salah" class="form-label font-weight-bold">Total</label>
                                <input type="text" name="jml_salah" id="jml_salah" class="form-control bg-light text-center" value="<?= $cv["jml_salah"]; ?>" readonly>   
                            </div>


                            
                        </div>   
                    </div>

                </form>
               
            </div>
        </div>
<!-- End Content -->