<?php
include "models/m_pasien.php";

$psn = new Pasien($connection);
$conn = mysqli_connect("localhost", "root", "", "health_care");

// cek tombol submt
if (isset($_POST["submit"]) ) {

    if ( act_pekanan($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diinputkan!');
                document.location.href = '?page=kontrol_pekanan';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diinput!');
                document.location.href = '?page=pekanan';
            </script>
        ";
    }
}


?>


<div class="content-header row px-5">
    <div class="content-header-left mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left">Check Up Mingguan</h2>
            </div>
        </div>
    </div>
</div>

<?php
    $tampil = $psn->tampil(); 

?>

<div class="content-body px-5">
    <section class="basic-radio">
        <div class="row">
            <div class="col-12">
                <div class="card mb-5">
                    
                    <div class="card-content">
                        <div class="card-body">

                            <form action="" method="POST" class="form form-horizontal">

                                <label>Tanggal Diagnosa</label>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label" for="tanggal"></label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                                </div>

                                <label>Nama</label>
                                <div class="input-group input-group-outline mb-3">
                                    <select name="nama_pasien" class="form-control" id="nama_pasien" required>
                                        <option value="">== Nama Pasien ==</option>
                                        <?php while($data = $tampil->fetch_object()) { ?>
                                            <option value="<?php echo $data->nama_lengkap ?>">
                                                <?php echo $data->nama_lengkap ?></option>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="col-12">
                                        <div class="input-group input-group-outline row">
                                            <div class="col-md-2">
                                                <span>Tekanan darah</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="td" class="form-control" name="td">
                                            </div>
                                            <div class="col-md-2">
                                                <span>Berat badan</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="bb" class="form-control" name="bb">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline row">
                                            <div class="col-md-2">
                                                <span>Tinggi badan</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tb" class="form-control" name="tb">
                                            </div>
                                            <div class="col-md-2">
                                                <span>IMT (Indeks Massa Tubuh)</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="imt" class="form-control" name="imt">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline row">
                                            <div class="col-md-2">
                                                <span>Gula darah</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="gula_darah" class="form-control" name="gula_darah">
                                            </div>
                                            <div class="col-md-2">
                                                <span>Lingkar Perut</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="lp" class="form-control" name="lp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline row">
                                            <div class="col-md-2">
                                                <span>Kolesterol</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="kolestrol" class="form-control" name="kolestrol">
                                            </div>
                                            <div class="col-md-2">
                                                <span>Catatan</span>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="catatan" class="form-control" name="catatan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-outline row">
                                            <div class="col-md-2">
                                                <span>Edukasi kesehatan</span>
                                            </div>
                                            <div class="col-md-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-warning">
                                                        <input type="radio" name="edukasi" value="Ya" id="edukasi">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">Ya</span>
                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-warning">
                                                        <input type="radio" name="edukasi" value="Tidak" id="edukasi">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">Tidak</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-12">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-warning">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</section>
</div>
