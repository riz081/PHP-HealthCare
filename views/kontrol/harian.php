<?php
include "models/m_pasien.php";

$psn = new Pasien($connection);
$conn = mysqli_connect("localhost", "root", "", "health_care");

// cek tombol submt
if (isset($_POST["submit"]) ) {

    if ( act_harian($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diinputkan!');
                document.location.href = '?page=kontrol_harian';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diinput!');
                document.location.href = '?page=harian';
            </script>
        ";
    }
}


?>


<div class="content-header row px-5">
    <div class="content-header-left mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left">Check Up Harian</h2>
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
                            <p>Isian Harian (setiap pekan)</p>
                            <p><b>Pertanyaan</b></p>
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

                                
                                <ol>
                                    <li style="line-height: 2; font-size: 16px;">
                                    Nutrisi
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>a) Karbo</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="karbo" value="Ya" id="karbo">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="karbo" value="Tidak" id="karbo">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <span>b) Protein</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="protein" value="Ya" id="protein">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="protein" value="Tidak" id="protein">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>c) Sayur</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="sayur" value="Ya" id="sayur">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="sayur" value="Tidak" id="sayur">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <span>d) Buah</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="buah" value="Ya" id="buah">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="buah" value="Tidak" id="buah">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>e) Vitamin</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="vitamin" value="Ya" id="vitamin">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="vitamin" value="Tidak" id="vitamin">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <span>f) Gula</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="gula" value="Sesuai" id="gula">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Sesuai</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="gula" value="Tidak Sesuai" id="gula">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak Sesuai</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>g) Garam</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="garam" value="Sesuai" id="garam">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">sesuai</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="garam" value="Tidak Sesuai" id="garam">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak Sesuai</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <span>h) Lain-lain :</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <fieldset class="form-group">
                                                            <textarea class="form-control" style="background-color: #d9d9d9" rows="3" name="lainnya" id="lainnya" placeholder="Tulis disini..."></textarea>
                                                        </fieldset>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="line-height: 2; font-size: 16px;">
                                        Aktifitas
                                        <div class="col-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="aktivitas" value="Ya" id="aktivitas">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="aktivitas" value="Tidak" id="aktivitas">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                        <div class="col-12 b2a">
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <span>Jenis aktivitas</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="jenis_aktivitas" class="form-control" name="jenis_aktivitas" placeholder="Tulis disini..." style="background-color: #d9d9d9">
                                                </div>
                                                <div class="col-md-3">
                                                    <span>Durasi</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="durasi" class="form-control" name="durasi" placeholder="Tulis disini..." style="background-color: #d9d9d9">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="line-height: 2; font-size: 16px;">
                                        Obat
                                        <div class="col-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="obat" value="Ya" id="obat">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="obat" value="Tidak" id="obat">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                        <div class="col-12 b3a">
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <span>Nama obat</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="nama_obat" class="form-control" name="nama_obat" placeholder="Tulis disini..." style="background-color: #d9d9d9">
                                                </div>
                                                <div class="col-md-3">
                                                    <span>Intensitas</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" id="intensitas" class="form-control" name="intensitas" placeholder="Tulis disini..." style="background-color: #d9d9d9">
                                                    <p class="text-sm text-danger">(berapa kali dalam sehari)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li style="line-height: 2; font-size: 16px;">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>Keluhan</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="keluhan" class="form-control" name="keluhan" placeholder="Tulis disini..." style="background-color: #d9d9d9">
                                                </div>
                                            </div>
                                        </div>   
                                    </li>
                                    <li style="line-height: 2; font-size: 16px;">
                                        Kebersihan
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>a) Mandi 2x</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="mandi" value="Ya" id="mandi">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="mandi" value="Tidak" id="mandi">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <span>b) Potong kuku</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="potong_kuku" value="Ya" id="kh51b">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="potong_kuku" value="Tidak" id="potong_kuku">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2">
                                                    <span>c) Gosok gigi</span>
                                                </div>
                                                <div class="col-md-3">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="gosok_gigi" value="Ya" id="gosok_gigi">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="gosok_gigi" value="Tidak" id="gosok_gigi">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <span>d) Memakai sabun</span>
                                                </div>
                                                <div class="col-md-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="memakai_sabun" value="Ya" id="memakai_sabun">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="memakai_sabun" value="Tidak" id="memakai_sabun">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>e) Kerapian (baju rapi, sisiran, bedakan)</span>
                                                </div>
                                                <div class="col-md-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="kerapian" value="Ya" id="kerapian">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="kerapian" value="Tidak" id="kerapian">
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
                                    </li>
                                    <li style="line-height: 2; font-size: 16px;">
                                        Merokok
                                        <div class="col-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-inline-block mr-2">
                                                    <fieldset>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="merokok" value="Ya" id="merokok">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Ya</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-warning">
                                                            <input type="radio" name="merokok" value="Tidak" id="merokok">
                                                            <span class="vs-radio">
                                                                <span class="vs-radio--border"></span>
                                                                <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Tidak</span>
                                                        </div>
                                                    </fieldset>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                        <div class="col-12 b4a">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Berapa batang/hari</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="jml_rokok" class="form-control" name="jml_rokok" placeholder="Tulis disini..." style="background-color: #d9d9d9">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
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
