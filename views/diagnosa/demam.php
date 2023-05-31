<?php
include "models/m_pasien.php";

$psn = new Pasien($connection);
$conn = mysqli_connect("localhost", "root", "", "health_care");

// cek tombol submt
if (isset($_POST["submit"]) ) {

    if ( act_demam($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diinputkan!');
                document.location.href = '?page=pasien_demam';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diinput!');
                document.location.href = '?page=demam';
            </script>
        ";
    }
}


?>


<div class="content-header row px-5">
    <div class="content-header-left mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left">Demam Berdarah</h2>
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

                            <form action="" method="POST">
                                <input type="hidden" name="id" value="">

                                <label>Tanggal Diagnosa</label>
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label" for="tanggal_dbd"></label>
                                    <input type="date" name="tanggal_dbd" id="tanggal_dbd" class="form-control" required>
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
                        </div>

                        <p style="margin-left: 25px"><b>Pertanyaan</b></p>

                        <ol style="margin-left: 25px">
                            <li style="line-height: 2; font-size: 16px;">
                                Apakah pasien mengalami nyeri kepala, terutama bagian frontal dan retro-orbital ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q1" value="0" id="Q1" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q1" value="1" id="Q1" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>


                            <li style="line-height: 2; font-size: 16px;">
                                Apakah mata pasien memerah ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q2" value="0" id="Q2" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q2" value="1" id="Q2" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>


                            <li style="line-height: 2; font-size: 16px;">
                                Mengalami diare ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q3" value="0" id="Q3" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q3" value="1" id="Q3" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>


                            <li style="line-height: 2; font-size: 16px;">
                                Berapa hari mengalami gejala tersebut ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q4" value="0" id="Q4" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q4" value="1" id="Q4" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>

                            <li style="line-height: 2; font-size: 16px;">
                                Nyeri tenggorokan beserta batuk ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q5" value="0" id="Q5" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q5" value="1" id="Q5" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>

                            <li style="line-height: 2; font-size: 16px;">
                                Mandi 2x sehari ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q6" value="0" id="Q6" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q6" value="1" id="Q6" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>
                        
                            <li style="line-height: 2; font-size: 16px;">
                                Sakit kepala ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q7" value="0" id="Q7" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q7" value="1" id="Q7" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>

                            <li style="line-height: 2; font-size: 16px;">
                                Sesak napas ? ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q8" value="0" id="Q8" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q8" value="1" id="Q8" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>

                            <li style="line-height: 2; font-size: 16px;">
                                Nyeri otot, sendi dan tulang ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q9" value="0" id="Q9" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q9" value="1" id="Q9" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>

                            <li style="line-height: 2; font-size: 16px;">
                                Menjaga kebersihan lingkungan ?
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block" style="padding-right:2em">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q10" value="0" id="Q10" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Benar</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                    <li class="d-inline-block">
                                        <fieldset>
                                            <div class="vs-radio-con vs-radio-warning">
                                                <input type="radio" name="Q10" value="1" id="Q10" required>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="">Salah</span>
                                            </div>
                                        </fieldset>
                                    </li>
                                </ul>
                            </li>

                            </ol>

                        <input type="submit" name="submit" value="Submit" class="btn btn-primary float-right" style="float: right; margin-right: 40px ">
                        </form>

                    </div>

                </div>
            </div>
        </div>
</div>
</section>
</div>
